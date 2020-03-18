                <form method="POST" action="{{ route('register') }}">
                                 @csrf
                                   <input id="name" class="form-control" type="text" placeholder="Full Name" name="name">
 
                                <input id="email" class="form-control" type="text" placeholder="Mobile Number" name="emaill">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="passwordl">
                               <!--  <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation"> -->
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </form>