<style>

.footer {
    border-radius: 5px;
    height: 150px;
    width: 100%;
    background-color: #E9ECEF;
    text-align: center;
}

/* .zone table,.zone td {
    border: 1px solid black;
    border-collapse: collapse;
} */

/* .table_in_zone , td{
    border: 1px solid black;
    border-collapse: collapse;
} */

/* table, td {
    border: 1px solid black;
    border-collapse: collapse;
} */

.jumbotron{
    padding: 1%;
    margin-bottom: 5%;
}

.back img{
    width:30px;
    margin:30px;
    filter: brightness(0) invert(1);
}

.fade-in {
    animation: fade-in 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}

@keyframes fade-in {
  0% {
            transform: translateY(50px);
    opacity: 0;
  }
  100% {
            transform: translateY(0);
    opacity: 1;
  }
}


.img-container{
    position: relative;
}

.img-container img {
    position: absolute;
}

.img-user{
    width: 15px !important;
    top: 5;
    left: 5;
}

.container{
    margin-bottom: 2%;
    overflow-x:auto;
}

.legend p{
    margin: 2%;
}

td img,.legend img{
    width:25px;
}

.booked{
    /* เอาไว้ใช้ถ้าโต๊ะนั้นไม่ให้เลือก  */
    opacity: 0.5;
}

.sub {
    opacity: 1;
}

table{
    width: 100%;
}

td,th{
    text-align: center;
    height:40px;
}

td:active {
    background-color: lightgray;
}

.stage{
    margin: auto;
    height: 65%;
    width: 30%;
    background-color: rgb(255, 187, 0);
}

.btn{
    margin-left: 5%;
    margin-right: 5%;
}

.summary_container{
    padding: 5%;
}

.summary_title{
    font-size: 150%;
}

.title {
    font-size: 3vw;
}

.title-contact {
    font-size: 2vw;
}

@media screen and (min-width: 426px){
    .title {
        font-size: 5vw;
    }
}

@media screen and (max-width: 426px){
    .title-contact {
        font-size: 4vw;
    }
}

</style>