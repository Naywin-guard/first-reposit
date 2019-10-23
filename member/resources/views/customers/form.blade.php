<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $customer->name }}" placeholder="name" class="form-control">
    <div class="" style="color:red">
      {{ $errors->first('name') }}
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') ?? $customer->email }}" placeholder="email" class="form-control">
    <div class="" style="color:red">
      {{ $errors->first('email') }}
    </div>
  </div>
  <div class="form-group">
    <label for="active">Status</label>
    <select class="form-control" name="active">
      <option value="" disabled active>Select Customer Status</option>
      @foreach ($customer->activeOption() as $optionKey => $optionValue)
          <option value="{{ $optionKey }}" {{ $customer->active==$optionValue?"selected":"" }}>{{ $optionValue }}</option>
      @endforeach
      {{-- <option value="1" {{ $customer->active=="Active"?'selected':""}}>Active</option>
      <option value="1" {{ $customer->active=="Inactive"?'selected':""}}>Inactive</option> --}}
    </select>
  </div>
  <div class="form-group">
    <label for="company">Company</label>
    <select class="form-control" name="company_id">
      @foreach ($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id==$customer->company_id? "selected":"" }}>{{ $company->name }}</option>
      @endforeach
    </select>
  </div>
