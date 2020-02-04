<style>
.footer {
    position: -webkit-sticky;
    position: sticky;
    bottom: 100;
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

.jumbotron {
    padding: 1%;
    margin-bottom: 1rem !important;
}

.back img {
    width: 30px;
    margin: 30px;
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
.img-container {
    position: relative;
}

.img-container img {
    position: absolute;
}

.img-user {
    width: 15px !important;
    top: 5;
    left: 5;
}

/* .container {
    margin-bottom: 2%;
    overflow-x: auto;
} */

.legend p {
    margin: 2%;
}

td img {
    max-width: 50px;
    width: 100%;
    height: auto;
}

td{
    position: relative;
}

.center-text{
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-weight: bold;
  font-size: 10pt;
}

.legend img {
    max-width: 25px;
    width: 100%;
    height: auto;
}

.booked {
    /* เอาไว้ใช้ถ้าโต๊ะนั้นไม่ให้เลือก  */
    opacity: 0.5;
}

.sub {
    opacity: 1;
}

table {
    table-layout: auto;
    width: 100%;
}

td,
th {
    text-align: center;
    height: 40px;
}

td:hover {
    background-color: lightgray;
}

.clicked {
    background-color: lightgray;
}

.stage {
    margin: auto;
    height: 65%;
    width: 100%;
    background-color: rgb(255, 187, 0);
}

.btn {
    margin-left: 5%;
    margin-right: 5%;
}

.summary_container {
    padding: 5%;
}

.summary_title {
    font-size: 150%;
}

/* X */
@media screen and (max-width: 420px){
    #description {
        display: none;
    }

    .w {
        width: 100% !important;
        margin: auto;
    }

    .text-small {
        font-size: 50px !important;
        padding-bottom: 0px;
    }

    .text-xsmall {
        font-size: 25px !important;
    }

    td img {
        width: 35px !important;
    }

    .jumbotron {
        margin-bottom: 0px !important;
        padding-bottom: 10px !important;
    }

    .breadcrumb {
        font-size: 14px !important;
        margin-bottom: 0px !important;
    }
    .legend img {
        width: 20px !important;
    }
}

/* @media screen and (max-width: 425px){
    td img {
        width: 17px !important;
    }
} */

@media screen and (max-width: 320px){
    td img {
        width: 14px !important;
    }

    .legend img {
        width: 14px !important;
    }
}

</style>