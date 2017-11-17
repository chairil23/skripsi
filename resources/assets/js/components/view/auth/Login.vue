<<template>
  <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form @submit.prevent="login">
							<input type="email" class="form__control" v-model="formLogin.email" placeholder="Email Address" />
							<small class="error__control" v-if="error.email">{{error.email[0]}}</small>
							<input type="password" class="form__control" v-model="formLogin.password" placeholder="Password" />
							<small class="error__control" v-if="error.password">{{error.password[0]}}</small>
							<small class="error__control" v-if="error.error">{{error.error}}</small>							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form class="form" @submit.prevent="register">
							<input type="text" class="form__control" v-model="formRegister.name" placeholder="Name"/>
							<small class="error__control" v-if="error.name">{{error.name[0]}}</small>
							<input type="email" clas="form__control" v-model="formRegister.email" placeholder="Email Address"/>
							<small class="error__control" v-if="error.email">{{error.email[0]}}</small>
							<input type="password" class="from__control" v-model="formRegister.password" placeholder="Password"/>
							<small class="error__control" v-if="error.password">{{error.password}}</small>
							<input type="password" class="from__control" v-model="formRegister.password_confirmation" placeholder="Password Conformation"/>
							<button :disabled="isProcessing" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
</template>

<script>
import {get, post} from '../../../helper/api'
// import {InvalidInputHelper} from '../../../helper/validator'
export default {
  	data(){
		return{
			formRegister: {
				name: '',
				email: '',
				password: '',
				password_confirmation: ''
			  
		 	},
			formLogin:{
				email: '',
				password: ''
			},  
			error: {},
			isProcessing: false
		}
	},
	
	methods: {
		register(){
			this.isProcessing= true
			this.error= {}
			post('api/auth/register', this.formRegister)
				.then((res) => {
					if(res.data.registered) {
						console.log(res.data.registered)
						
						this.$router.push('/login')
					}
					this.isProcessing = false
				})
				.catch((err) => {
					if(err.response.status === 422){						
						this.error = err.response.data
					}					
					this.isProcessing = false
				})
		},

		login(){
			this.$session.clear()
			this.isProcessing = true
			this.error = {}
			post('api/auth/login', this.formLogin)
				.then((res) => {
					if(res.data.authenticated){
						this.$session.start()
						this.$session.set('token', res.data.api_token)
						this.$router.push('/')
					}				
					this.isProcessing = true
				})
				.catch((err) => {
					if(err.response.status === 422){
						console.log(err.response.status)
						this.error = err.response.data
					}
					else if(err.response.status === 401){
						console.log(err.response.status)
						this.error = err.response.data
					}
					this.isProcessing = false
				})
		}

		
	}


}
</script>

