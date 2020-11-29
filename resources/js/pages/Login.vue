<template>
    <div>
        <section class="col-6 offset-3  custom-card ">
           <section class="card text-white bg-dark">
               <section class="card-header text-right">ورود به پنل کاربری</section>
                <section class="col-6 offset-3">
                    <ul>
                        <li class="alert alert-danger text-right text-right" v-for="error in errors" :key="index" >
                            {{error}}
                        </li>
                    </ul>
                </section>
               <section class="card-body text-right">
                   <form action="#" class="color-input" @submit.prevent="onSubmit">
                       <section class="form-group  col-6 offset-3">
                           <input type="text" class="form-control" placeholder="شماره موبایل" v-model="phoneNumber" >
                       </section>
                       <section class="form-group col-6 offset-3">
                           <input type="password" class="form-control" placeholder="رمزعبور" v-model="Password">
                       </section>
                       <section class="form-group col-6 offset-3">
                           <button class="  btn btn-danger" ><router-link to="/register" class="text-decoration-none text-white">ثبت نام</router-link></button>
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
        name: "login",
        props:['app'],
        data(){
            return{
                phoneNumber : '' ,
                Password : '',
                errors:[],
            }
        },
        methods:{
            onSubmit(){
                this.errors = [] ;
                if(!this.phoneNumber){
                    this.errors.push('لطفا شماره موبایلی که با آن ثبت نام کرده اید را وارد کنید')
                }
                if (!this.Password){
                    this.errors.push('رمز عبور خود را وارد کنید')
                }
                if (!this.errors.length){
                    const data = {
                        phoneNumber : this.phoneNumber ,
                        Password : this.Password ,
                    };
                    axios.post('auth/login',data).then(response=>{
                       /*axios.get('UserPanel');*/
                        window.location = response.data.redirect;
                    }).catch(error => {
                        this.errors = error.response.data ;
                    })
                }
            }
        }



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
    li{
        list-style: none;
        color: black;
        font-size: 14px;
        text-align: center;
    }

</style>
