<template>
    <div>
        <section class="col-6 offset-3  custom-card ">
           <section class="card text-white bg-dark">
               <section class="card-header text-right">ورود به پنل کاربری</section>
               <section class="card-body text-right">
                   <form action="#" class="color-input">
                       <section class="form-group  col-6 offset-3">
                           <input type="text" class="form-control" placeholder="نام کاربری یا شماره موبایل" >
                       </section>
                       <section class="form-group col-6 offset-3">
                           <input type="password" class="form-control" placeholder="رمزعبور">
                       </section>
                       <section class="form-group col-6 offset-3">
                           <button class="  btn btn-danger" ><a href="#" class="text-decoration-none text-white">ثبت نام</a></button>
                           <input type="submit" class="btn btn-success" value="ورود به پنل کاربری">
                       </section>
                   </form>
               </section>
           </section>
        </section>
    </div>
</template>

<script>
    export default {
        name: "login"
    }
</script>

<style scoped>
 div{
     background: url("../images/loginpage.jpg") center center no-repeat fixed;
     padding-top: 767px;
     background-size:cover ;



 }
  .custom-card{

      position: absolute;
      top: 0;
      opacity: 50%;
      margin-top: 160px;

    }
    .color-input input[type=text]{
        color: red;

    }
    ::placeholder{
        color: red;
        text-align: right;
    }

</style>
