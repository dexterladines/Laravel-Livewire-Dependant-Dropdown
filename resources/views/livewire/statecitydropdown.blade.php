<div>
    <h1 class="text-center m-5">Laravel Livewire Dependant Dropdown</h1>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
        <div class="col-md-6">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>Choose State</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <select name="city_id" class="form-control">
                    <option value="" selected>Choose City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
