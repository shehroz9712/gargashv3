<form action="{{ route('user.submit_enquiry') }}" method="POST" class="form-wrap form-validate" id="serviceRequestForm">
  @csrf
    <div class="form-bg from-wrapper radius-33 bg-img-cover img-img-no-repeat w-100 position-center">
      <div class="mb-3 form-group ">
        <i class="fa-solid fa-user icon"></i>
        <input type="text" class="form-control" placeholder="Name" title="Name is required" name="user-name" required minlength="3" maxlength="50" pattern="[A-Za-z ]+">
      </div>
      <div class="mb-3 form-group">
        <i class="fa-solid fa-phone icon"></i>
        <input type="tel" class="form-control" placeholder="Phone Number" name="user-phone-number"
          title="Phone Number is required" required pattern="[0-9]{10,15}">
      </div>
      <div class="mb-3 form-group">
        <i class="fa-solid fa-envelope icon"></i>
        <input type="email" class="form-control" placeholder="Email" name="email" title="Please enter a valid email address">
      </div>
      <div class="mb-3 form-group">
        <i class="fa-solid fa-car icon"></i>
        <input type="text" class="form-control" placeholder="Make" name="make" minlength="2" maxlength="30">
      </div>
      <div class="mb-3 form-group">
        <i class="fa-solid fa-car-side icon"></i>
        <input type="text" class="form-control" placeholder="Model" name="service" minlength="1" maxlength="30">
      </div>
  
      <div class="mb-3 form-group">
        <i class="fa-solid fa-tools icon"></i>
        <select class="form-select" name="service">
          <option disabled selected value="">Select Services</option>
          <option value="Auto-Spa">Auto Spa</option>
          <option value="Car-Inspection">Car Inspection</option>
          <option value="Car-Wrapping">Car Wrapping</option>
          <option value="Ceramic">Ceramic</option>
  
          <option value="Electric-Repair">Electric Repair</option>
          <option value="Extended-Warranty">Extended Warranty</option>
          <option value="General-Repair">General Repair</option>
          <option value="Major">Major Services</option>
          <option value="Minor">Minor Services</option>
  
          <option value="Road-Side-Assistance">Road Side Assistance</option>
          <option value="Tinting">Tinting</option>
          <option value="Tinting">Others</option>
        </select>
        <span style="color: red;" id="serviceError"></span>
      </div>
      <div class="mb-3 form-group">
        <i class="fa-solid fa-map-marker-alt icon"></i>
        <input type="text" class="form-control" placeholder="Location" name="location" minlength="3" maxlength="100">
      </div>
    </div>
    <div class="form-btn-wrap text-center">
      <button type="submit" class="btn radius-100 text-center">
        <i class="fa-solid fa-angle-right"></i>
      </button>
    </div>
  </form>