/**
 * @module Main
 * @description Script que se encarga inicializar todo el sitio web
 */

import core from "./core.js";
const clsCore = new core();
const { createApp, nextTick } = Vue;

createApp({
  data() {
    return {
      categories: [],
      detergents: [],
      productSelected: 0,
      categorySelected: 1,
      subcategorySelected: 0,
      isLoading: false,
      currentPage: 1,
      pageSize: 10,
    };
  },

  created() {
    clsCore.initLoader();
    this.getCategories();
    this.getProducts();
  },

  mounted() {
    clsCore.initTitle();
    clsCore.initScroll();
    this.initCarousel();
    this.initReleatedContent();

    MicroModal.init({
      openTrigger: "data-custom-open",
      closeTrigger: "data-custom-close",
      openClass: "is-open",
      disableScroll: true,
      disableFocus: false,
      awaitOpenAnimation: true,
      awaitCloseAnimation: true,
      debugMode: false,
    });

  },

  computed: {
    getProductsByCategory() {

      return this.categorySelected > 1
        ? this.categories.find(
          (category) => category.id === this.categorySelected
        ).subcategories
        : [];
    },

    getProducstBySubcategory() {
      const products = this.detergents.filter((detergent) => {
        const filteredProducts =
          this.subcategorySelected > 0
            ? this.getProductsByCategory.find(
              (subcategory) => subcategory.id === this.subcategorySelected
            ).products
            : [];
        return filteredProducts.includes(detergent.id);
      });

      return products;
    },

    getSelectedSubcategories() {
      return this.categories.length > 0 && this.categorySelected > 0
        ? {
          category:
            this.categories.find(
              (category) => category.id === this.categorySelected
            ).name ?? "",
          selectedClass: this.categories.find(
            (category) => category.id === this.categorySelected
          ).selectedClass,
          subcategories: this.categories.find(
            (category) => category.id === this.categorySelected
          ).subcategories,
        }
        : [];
    },

    getSelectedCategory() {
      return this.productSelected > 0
        ? this.detergents.find((product) => product.id === this.productSelected)
          .title
        : "";
    },

    getSelectedDescription() {
      return this.productSelected > 0
        ? this.detergents.find((product) => product.id === this.productSelected)
          .description
        : "";
    },

    getSelectedSpecifications() {
      return this.productSelected > 0
        ? this.detergents.find((product) => product.id === this.productSelected)
          .specifications
        : "";
    },

    getSelectedIMG() {
      return this.productSelected > 0
        ? this.detergents.find((product) => product.id === this.productSelected)
          .img
        : "";
    },

    getSelectedPDF() {
      return this.productSelected > 0
        ? this.detergents.find((product) => product.id === this.productSelected)
          .pdf
        : "";
    },

    pages() {
      const products =
        this.categorySelected > 1 && this.subcategorySelected > 0
          ? this.getProducstBySubcategory
          : this.detergents;
      return Math.ceil(products.length / this.pageSize);
    },
  },

  methods: {
    initCarousel() {
      const config = {
        type: "fade",
        perPage: 1,
        pagination: false,
        autoplay: true,
        width: "100%",
        height: "50vh",
        speed: 1000,
        rewind: true,
        cover: true,
      };
      clsCore.initCarousel("cbanner", 1, config);
    },

    initReleatedContent() {
      const config = {
        type: "slide",
        perPage: 3,
        pagination: false,
        breakpoints: {
          1024: {
            perPage: 1,
          },
          375: {
            perPage: 1,
          },
        },
        perMove: 1,
      };

      clsCore.initCarousel("related-splide", 1, config);
    },

    async getCategories() {
      const response = await fetch("./js/categories.json");
      const categories = await response.json();
      this.categories = [...categories];
    },

    async getProducts() {
      const response = await fetch("./js/products.json");
      const products = await response.json();
      this.detergents = [...products];
    },

    openDetail(id) {
      MicroModal.show("modal-detail");
      this.productSelected = id;
    },

    closeDetail() {
      MicroModal.close("modal-detail");
    },

    getRows() {
      const start = (this.currentPage - 1) * parseInt(this.pageSize);
      const end = start + parseInt(this.pageSize);
      const products =
        this.categorySelected > 1 && this.subcategorySelected > 0
          ? this.getProducstBySubcategory
          : this.detergents;
      return products.slice(start, end);
    },

    goToPage(val) {
      let i = val == 0 ? 1 : val > this.pages ? this.pages : val;
      this.currentPage = i;
    },

    selectResponsiveSubcategory(id) {
      this.subcategorySelected = id;

      nextTick(() => {

        window.scrollTo({ top: document.querySelector('#product-container').offsetTop - 100, behavior: 'smooth' });

      });
    }
  },

  watch: {
    categorySelected() {
      this.subcategorySelected = 0;
      this.currentPage = 1;
    },
    subcategorySelected() {
      this.currentPage = 1;
      this.isLoading = true;

      setTimeout(() => {
        this.isLoading = false;
      }, 100);
    },
  },
}).mount("#app");

const accordionItems = document.querySelectorAll(".accordion__item");

accordionItems.forEach((item) => {
  const accordionHeader = item.querySelector(".accordion__header");

  accordionHeader.addEventListener("click", () => {
    const openItem = document.querySelector(".accordion-open");
    toggleItem(item);
    if (openItem && openItem !== item) {
      toggleItem(openItem);
    }
  });
});

const toggleItem = (item) => {
  const accordionContent = item.querySelector(".accordion__content");

  if (item.classList.contains("accordion-open")) {
    accordionContent.removeAttribute("style");
    item.classList.remove("accordion-open");
  } else {
    accordionContent.style.height = accordionContent.scrollHeight + "px";
    item.classList.add("accordion-open");
  }
};

/* Search Bar */

const observer = new MutationObserver(function(mutations) {
  mutations.forEach(function(mutation) {
    if (mutation.target.classList.contains('nav-menus-wrapper-open')) {
        const searchBar = document.querySelector('.input-search')
        if (searchBar) {
          searchBar.blur();
         }
      }
  });
});

observer.observe($$('#menu-offcanvas')[0], {
  attributes: true,
  characterData: true,
  childList: true,
  subtree: true,
  attributeOldValue: true,
  characterDataOldValue: true,
  attributeFilter: ['style']
});

