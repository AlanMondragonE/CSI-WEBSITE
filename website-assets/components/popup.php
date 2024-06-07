<div id="popup" class="showPopup">
    <div id="toPromotedPage" class="animate__animated animate__slideInLeft" ref="toPromotedPage">
        <div class="titlePopU">
            <i class="fa-regular fa-lightbulb-on" @click="mostrarCardInfo"></i>
            <div class="titleTxt" @click="mostrarCardInfo">
                <h6 style="color: #e7e7e7; font-size: 12px;">Te podría interesar:</h6>
                <h5 class="Inolab">INOLAB ESPECIALISTAS EXPOFARMA 2024</h5>
            </div>
            <button id="descartar" class="closeBtn" @click="cerrarPopUp">X</button>
        </div>
        <div class="popUpCont" ref="popUpCont">
            <div class="popUpInside">
                <p class="pBtn" style="font-size : 13px;"> El 17, 18 y 19 de abril, en el World Trade Center, CDMX.
                <br>
                <span>Te esperamos en el Stand <strong>480.</strong> <span class="oculatarMovil">Platicaremos de las últimas tendencias en
                soluciones de Alta Tecnología.</span>
                <br>
                <span style="color: blue;">#LifeSciences #Temperatura</span>
                </p>
                <div class="expoFarma">
                    <img src="https://www.expofarma.net/assets/img/navbar/logo.png" alt="minImg" width="160" height="60">
                </div>
            </div>
            <div class="btnsCont">
                    <button class="btnPopUp">
                        <a id="consulta" class="btnPopUp" href="https://www.expofarma.net" target="_blank">Consultar</a>
                    </button>
                    <button class="btnPopUp">
                        <a id="consulta" class="btnPopUp" href="https://www.expofarma.net/#contacto" target="_blank">Registrate</a>
                    </button>
            </div>
        </div>
    </div>
    <button id="reabrirBtn" ref="reabrirBtn" class="animate__animated animate__slideInLeft" @click="reabrirPopUp"><i class="fa-regular fa-message"></i></button>
</div>