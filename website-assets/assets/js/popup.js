/*const { createApp: newApp } = Vue;

const popup_app = newApp({
  data() {
    return {
      showPopup: true,
    }
  },

  mounted() {
    window.addEventListener('scroll', this.handleScroll); // Agregado el evento scroll
    this.mostrarCardInfo(); // Llamar al método para mostrar la tarjeta desde el inicio
  },

  methods: {
    handleScroll() {
      if (this.showPopup && (document.body.scrollTop > 300 || document.documentElement.scrollTop > 200)) {
        this.mostrarPopUp();
      }
    },
    mostrarCardInfo() {
      const cardInfo = this.$refs.popUpCont;
      if (cardInfo) {
        cardInfo.style.display = "block";
      }
    },
    mostrarPopUp() {
      const toPromotedPage = this.$refs.toPromotedPage;
      const reabrirBtn = this.$refs.reabrirBtn;
      if (toPromotedPage && reabrirBtn) {
        toPromotedPage.style.display = "block";
        reabrirBtn.style.display = "none";
        this.showPopup = false;
      }
    },
    cerrarPopUp() {
      const toPromotedPage = this.$refs.toPromotedPage;
      const reabrirBtn = this.$refs.reabrirBtn;
      if (toPromotedPage && reabrirBtn) {
        toPromotedPage.style.display = "none";
        reabrirBtn.style.display = "block";
      }
    },
    reabrirPopUp() {
      const toPromotedPage = this.$refs.toPromotedPage;
      const reabrirBtn = this.$refs.reabrirBtn;
      if (toPromotedPage && reabrirBtn) {
        toPromotedPage.style.display = "block";
        reabrirBtn.style.display = "none";
        this.showPopup = false;
      }
    }
  }
});

popup_app.mount('#popup');*/