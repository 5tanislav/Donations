<x-layout>
    <body class="text-center">
        <div class="p-3 mb-3 bg-success text-white text-center">
            Donation form
        </div>
            <form action="{{route('donations.store')}}" method="post">
            @csrf
                <div class="row mb-3 justify-content-center">
                    <label for="name" class="col-auto col-form-label">Name</label>
                <div class="col-3">
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="email" class="col-auto col-form-label">Email</label>
                <div class="col-3">
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="amount" class="col-auto col-form-label">Amount</label>
                <div class="col-3">
                    <input type="number" class="form-control" id="amount" name="amount">
                    @error('amount')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="message" class="col-auto col-form-label">Message</label>
                <div class="col-3">
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                </div>
                    <button class="bg-success" type="submit" class="submit">Submit</button>
                </div>
            </form>
        </div>
</x-layout>
