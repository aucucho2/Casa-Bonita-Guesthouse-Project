<section class="reservation" id="reservation">

      <h1 class="heading">book now</h1>

      <form  action="{{route('send.email')}}" method="POST">
         @csrf

         <div class="container">

            <div class="box">
               <p>name <span>*</span></p>
               <input type="text" class="input" placeholder="Your Name"  value="{{ old('name') }}">
               @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="box">
               <p>email <span>*</span></p>
               <input type="text" class="input" placeholder="Your Email" value="{{ old('email') }}">
               @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" class="input"  value="{{ old('check in') }}">
               @error('check in') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="box">
               <p>check out <span>*</span></p>
               <input type="date" class="input">
            </div>

            <div class="box">
               <p>adults <span>*</span></p>
               <select name="adults" class="input" value="{{ old('adults') }}">
               @error('adults') <span class="text-danger">{{ $message }}</span> @enderror
                  <option value="1">1 adults</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
                  <option value="6">7 adults</option>
               </select>
            </div>

            <div class="box">
               <p>children <span>*</span></p>
               <select name="child" class="input"value="{{ old('children') }}">
               @error('children') <span class="text-danger">{{ $message }}</span> @enderror
                  <option value="1">1 child</option>
                  <option value="2">2 child</option>
                  <option value="3">3 child</option>
                  <option value="4">4 child</option>
                  <option value="5">5 child</option>
                  <option value="6">6 child</option>
               </select>
            </div>

            <div class="box">
               <p>rooms <span>*</span></p>
               <select name="rooms" class="input"value="{{ old('rooms') }}">
               @error('rooms') <span class="text-danger">{{ $message }}</span> @enderror
                  <option value="1">1 rooms</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>

            <div class="box">
               <p>room type <span>*</span></p>
               <select name="type" class="input" value="{{ old('room type') }}">
               @error('room type') <span class="text-danger">{{ $message }}</span> @enderror
                  <option value="1">Exclusive Room</option>
                  <option value="2">Twin Beded Room</option>
                  <option value="3">1 Bad Room</option>
               </select>
            </div>
   
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>