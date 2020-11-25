<template>
    <section class="custom-register">
      <section class="container-fluid">
          <section class="row pl-0 pr-0">
              <section class="col-12 custom-reg" style="height:50px;">
                <ul>
                    <li> <router-link class="text-link" to="/"> صفحه اصلی</router-link></li>
                </ul>
              </section>

                  <!--<img src="../images/registerimage.jpg" alt="" class="img-fluid">-->
                  <section class="col-6 offset-3 ">
                  <form action="">
                       <h3 class="text-right mt-2">ثبت نام</h3>
                      <section class="form-group">
                      <input type="text" class="form-control mt-3 " placeholder="نام">
                  </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="نام خانوادگی">
                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="شماره تماس">
                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="ایمیل(دلخواه)">
                      </section>
                      <section class="form-group">
                          <input type="password" class="form-control" placeholder="رمزعبور">
                      </section>
                      <section class="form-group">
                          <input type="password" class="form-control" placeholder="تکرار رمزعبور">
                      </section>
                      <section class="form-group d-flex ">
                          <input type="submit" class="btn btn-success " value="ثبت نام">
                          <input type="submit" class="btn btn-danger" value="قبلا ثبت نام کرده ام">

                      </section>
                  </form>
                  </section>
              </section>
          </section>
      </section>



</template>

<script>
    export default {
        name: "regiser"
    }
</script>

<style scoped>
.custom-register{
    background: url("../images/loginpage.jpg") center center no-repeat fixed;
    background-size: cover;
    padding-bottom: 767px;
}
/*img{
    position: relative;

}*/
   form{

        margin-top:105px;
       direction: rtl;
    }

        .custom-reg{
            background-color: #F7A9C3;
        }
.custom-reg ul li {
    text-align: right;
    padding: 10px;

}
.text-link{
    text-decoration: none;
    color: black;
    font-size:16px ;
}



</style>
