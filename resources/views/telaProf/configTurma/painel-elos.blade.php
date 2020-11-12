<div class="timeline">
    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Guerreiro</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Guerreiro.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Elite</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Elite.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Mestre</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Mestre.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Épico</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Epico.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Lendário</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Lenda.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>

    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Mítico</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eaque amet deleniti hic quas qui cumque delectus aliquid, eius quia quod, quae, aliquam aspernatur facilis. Minima quod corporis dignissimos porro.</p>
        </div>
        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="{{asset('img/elos/elo_Mitico.png')}}" class="img-fluid" alt="img">
        </div>
        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date"></div>
    </div>
</div>

<style>
:focus{
outline: 0px solid transparent !important;
}
.timeline {
    padding: 50px 0;
    position: relative;
}
.timeline-nodes {
        padding-bottom: 25px;
        position: relative;
    }
.timeline-nodes:nth-child(even) {
    flex-direction: row-reverse;
}
.timeline h3, .timeline p {
    padding: 5px 15px;
} 
.timeline h3{
    font-weight: lighter;
    background: #563d7c;
}
.timeline p, .timeline time {
    color: #563d7c
}
.timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    width: 0;
    border-left: 2px dashed #563d7c;
    height: 100%;
    z-index: 1;
    transform: translateX(-50%);
}
.timeline-content {
    border: 1px solid #563d7c;
    position: relative;
    border-radius: 0 0 10px 10px;
    box-shadow: 0px 3px 25px 0px rgba(10, 55, 90, 0.2)
}
.timeline-nodes:nth-child(odd) h3,
.timeline-nodes:nth-child(odd) p {
    text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-date {
    text-align: left;
}
 
.timeline-nodes:nth-child(even) .timeline-date {
    text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    left: 100%;
    width: 0;
    border-left: 10px solid #563d7c;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    right: 100%;
    width: 0;
    border-right: 10px solid #563d7c;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-image {
    position: relative;
    z-index: 100;
}
.timeline-image::before {
    content: "";
    width: 100px;
    height: 100px;
    border: 2px dashed #563d7c;
    border-radius: 50%;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: #fff;
    z-index: 1;
    

}
.timeline-image img {
    position: relative;
    z-index: 100;
}
/*small device style*/

@media (max-width: 767px) {
    .timeline-nodes:nth-child(odd) h3,
    .timeline-nodes:nth-child(odd) p {
    text-align: left
}
.timeline-nodes:nth-child(even) {
    flex-direction: row;
}
    .timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 4%;
    width: 0;
    border-left: 2px dashed #563d7c;
    height: 100%;
    z-index: 1;
    transform: translateX(-50%);
}
.timeline h3 {
    font-size: 1.7rem;
}
.timeline p {
    font-size: 14px;
}
.timeline-image {
    position: absolute;
    left: 0%;
    top: 60px;
    /*transform: translateX(-50%;);*/
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    left: auto;
    right: 100%;
    width: 0;
    border-left: 0;
    border-right: 10px solid #563d7c;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    right: 100%;
    width: 0;
    border-right: 10px solid #563d7c;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-date {
    text-align: left;
}
.timeline-image::before {
    width: 85px;
    height: 85px;
}
}

/*extra small device style */
@media (max-width: 575px) {
    .timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 3%;
}
.timeline-image {
    position: absolute;
    left: -5%;
    }
.timeline-image::before {
    width: 80px;
    height: 80px;
}
}
    
</style>