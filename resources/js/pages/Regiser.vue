<template>
    <section class="custom-register">
      <section class="container-fluid">
          <section class="row pl-0 pr-0">
              <section class="col-12 custom-reg" style="height:50px;">
                <ul>
                    <li class="header-list"> <router-link class="text-link" to="/"> صفحه اصلی</router-link></li>
                </ul>
              </section>

                  <!--<img src="../images/registerimage.jpg" alt="" class="img-fluid">-->
                  <section class="col-6 offset-3 ">
                  <form action=""  >

                       <h3 class="text-right mt-2">ثبت نام</h3>

                      <section class="errorbox alert alert-success alert-dismissible" v-if="todos" >
                          <ul >
                              <li  v-for="(todo,index) in todos.errors" :key="index[0]">
                                  {{todo[0]}}
                              </li>
                          </ul>
                      </section>
                      <section class="form-group"  >
                      <input type="text" class="form-control mt-3 " placeholder="نام" v-model="firstName">
                  </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="نام خانوادگی" v-model="lastName">
                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="شماره تماس" v-model="phoneNumber">
                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control" placeholder="ایمیل(دلخواه)" v-model="email">
                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control"  placeholder="رمزعبور" v-model="Password">

                      </section>
                      <section class="form-group">
                          <input type="text" class="form-control"  placeholder="تکرار رمزعبور" v-model="PasswordAgain">
                      </section>
                      <section class="form-group d-flex col-4 mr-3  ">
                          <button type="submit" class="btn btn-success " @click="onSubmit" >ثبت نام</button>
                          <button class="btn btn-danger"><router-link class="text-decoration-none text-white" to="login">قبلا ثبت نام کرده ام!!!</router-link></button>

                      </section>
                  </form>
                  </section>
              </section>
          </section>
      </section>



</template>

<script>
    const Swal = require('sweetalert2');
    export default {
        name: "register",
        props:['app'],
        data() {
            return {
                firstName: '',
                lastName: '',
                phoneNumber: '',
                email: '',
                Password: '',
                PasswordAgain: '',
                errors: [],
                todos: ''
            }
        },
        methods: {
            onSubmit() {

                this.errors = [] ;
                if(!this.errors.length)
                {
                   const data = {
                        firstName : this.firstName,
                        lastName : this.lastName,
                        phoneNumber : this.phoneNumber,
                        email : this.email ,
                        Password : this.Password,
                        PasswordAgain: this.PasswordAgain ,
                    };
                    axios.post('auth/register',data)
                    .then(response =>{
                     this.firstName = this.lastName = this.phoneNumber = this.email = this.Password = this.PasswordAgain = '' ;

                        Swal.fire({
                            title: 'با موفقیت!!!',
                            text: 'مشتری گرامی از حسن اعتماد شما متشکریم',
                            icon: 'success',
                            confirmButtonText: 'بستن',

                        });
                        this.$router.push('login');
                    }).catch(error =>{
                       this.todos = error.response.data
                    });
                }
            }

            },

    }
</script>

<style scoped>
.custom-register{
    background: url("../images/loginpage.jpg") center center no-repeat fixed;
    background-size: cover;
    padding-bottom: 767px;
}

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
    .header-list{
        list-style: none;
    }
     input{
         opacity: 75%;
     }
    .errorbox{
        background-color: orange;
    }
    .errorbox ul li{
        list-style: none;
        text-align: right;
        font-size: 12px;
    }


</style>
