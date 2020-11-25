<template>
    <section class="container-fluid ml-0 mr-0 ">
        <section class="row pl-0 pr-0">
            <section class="header">
                <section class="col-12  d-flex ">
                    <section class="col-5 logo ">
                        <ul class=" login-custom ">

                            <li ><router-link to="/register" >ثبت نام</router-link></li>
                            <li><router-link to="/login" >ورود</router-link></li>


                        </ul>
                    </section>

                    <section class="col-6  " >
                        <nav class="navbar navbar-inverse navbar-expand-md bg-menu navbar-dark d-flex flex-row-reverse navbar-fixed-top">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse " id="myNavbar">
                                <ul class="navbar-nav d-flex flex-md-row-reverse list-custom  w-80 ">
                                    <li class="nav-item ml-lg-2 mr-lg-2">
                                        <a class="nav-link txt-menu" href="#">صفحه اصلی</a>
                                    </li>
                                    <li class="nav-item ml-lg-2 mr-lg-2">
                                        <a class="nav-link txt-menu" href="#section1">نمونه کارها</a>
                                    </li>
                                    <li class="nav-item ml-lg-2 mr-lg-2">
                                        <a class="nav-link txt-menu" href="#section2">درباره ما</a>
                                    </li>
                                    <li class="nav-item ml-lg-2 mr-lg-2">
                                        <a class="nav-link txt-menu" href="#">باشگاه مشتریان</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </section>


                </section>
                <section class="web-name">
                    <h1>نام سایت شما</h1>
                   <!-- Taeen Moshavere -->
                    <button type="button" class="btn btn-custom col-2 offset-5" data-toggle="modal" data-target="#myModal">
                        درخواست مشاوره رایگان
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header flex-row-reverse ">
                                    <h4 class="modal-title ">درخواست مشاوره</h4>
                                    <button type="button" class="close ml-0" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body " style="direction: rtl;">
                                    <form action="#">
                                        <section class="form-group">
                                        <input type="text" class="form-control" placeholder="نام و نام خانوادگی">
                                    </section>
                                        <section class="form-group">
                                            <input type="text" class="form-control" placeholder="شماره همراه">
                                        </section>
                                        <section class="form-group">
                                            <input type="submit" class="btn btn-success" value="درخواست مشاوره">
                                        </section>
                                    </form>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                                </div>

                            </div>
                        </div>
                    </div>
                   <!-- End Taeen Moshavere -->
                </section>
                <section class="col-11   d-flex justify-content-around">
                    <section class="col-3 offset-2 col-md-4 img-custom">
                        <img src="../images/led.jpg" class="img-fluid" alt="">
                    </section>
                    <section class="col-3 col-md-4 img-custom mt-5">
                        <img src="../images/woman.png" class="img-fluid" alt="">
                    </section>
                    <section class="col-3 col-md-4 img-custom">
                        <img src="../images/woman2.png" class="img-fluid" alt="">
                    </section>
                </section>
            </section>
        </section>
        <section class="clearfix"></section>
        <!-- End Header -->
        <!-- Start Work samples -->
        <section class="row">
            <section class="col-12  mt-5" id="section1">
                <h1 class="text-center mt-5">نمونه کارها</h1>
                <img class="col-6 offset-3" src="../images/Line.png" alt="">
            </section>
        </section>

        <section class="col-12 mt-3 d-flex justify-content-between">

            <section class="col-4">
                <div class="card" >
                    <img class="card-img-top" id="images" src="../images/led.jpg" alt="Card image" style="width:100%" @click="changeImage" title="روی عکس کلیک کنید">
                    <div class="card-body">
                        <h4 class="card-title text-right">ال ای دی تراپی</h4>
                        <p class="card-text  txt-custom">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>

                    </div>
                </div>
            </section>
            <section class="col-4">
                <div class="card" >
                    <img class="card-img-top" id="images1" src="../images/led.jpg" alt="Card image" style="width:100%" @click="changeImage1" title="روی عکس کلیک کنید">
                    <div class="card-body">
                        <h4 class="card-title text-right">مزوتراپی</h4>
                        <p class="card-text txt-custom">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>

                    </div>
                </div>
            </section>
            <section class="col-4">
                <div class="card" >
                    <img class="card-img-top" id="images2" src="../images/kharab.jpg" alt="Card image" style="width:100%" @click="changeImage2" title="روی عکس کلیک کنید">
                    <div class="card-body">
                        <h4 class="card-title text-right">میکرونیدلینگ</h4>
                        <p class="card-text txt-custom">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>

                    </div>
                </div>
            </section>
        </section>
        <!-- End Work samples -->
        <!-- Start About me -->

        <section class="row">
            <section class="col-12  mt-5" id="section2">
                <h1 class="text-center mt-5">درباره ما</h1>
                <img class="col-6 offset-3" src="../images/Line.png" alt="">
            </section>
        </section>
        <section class="row">
            <section class="col-10 col-md-12  mt-3">
                <section class="about-custom">
                    <section class="col-8  "  >
                        <h2 class="text-center mr-5"> من مریم بالین پرست هستم</h2>
                        <p class=" txt-custom">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </section>
                </section>
            </section>
        </section>
        <!-- End About me -->
        <section class="row pl-0 pr-0">
            <section class="col-12 mt-3 footer d-flex">
                <section class="col-5 mt-5">
                    <h2 class="text-center mt-5">مراقب پوست خود باشیم</h2>
                    <h1 class="text-center">Logo</h1>
                </section>
                <section class="col-5 offset-2 ">
                    <section class="d-flex"> <p class="mt-5">09126646164</p><h5 class="mt-5">:شماره تلفن</h5><i class="fas fa-phone mt-5 mr-2"></i></section>
                    <section class="d-flex"> <p class="mt-5">پاسداران,محدوده دولت</p><p class="mt-5">:آدرس</p><i class="fas fa-map-marker mt-5"></i></section>

                </section>
            </section>
        </section>
    </section>


</template>

<script>

    export default {
        name: "home",
        props:['app'],
        data(){
            return{
                image: './images/woman.png',
                image1: './images/woman2.png',
                image2: './images/led.jpg',
            }
        },
        methods:{
            changeImage(){
                var image = document.getElementById('images');
                if(image.src.match('led')){
                    image.src = this.image ;
                }else{
                    image.src = "./images/led.jpg" ;
                }
            },
            changeImage1(){
                var image = document.getElementById('images1');
                if(image.src.match('led')){
                    image.src = this.image1 ;
                }else{
                    image.src = "./images/led.jpg" ;
                }
            },
            changeImage2(){
                var image = document.getElementById('images2');
                if(image.src.match('kharab')){
                    image.src = this.image2 ;
                }else{
                    image.src = "./images/kharab.jpg" ;
                }
            },
        }
    }
</script>

<style scoped>
.btn-custom{
    background-color: #6f8b7f !important;
    color: white ;
}
</style>
