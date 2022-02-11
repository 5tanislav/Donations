<x-layout>
    <body>
        <div class="donation_form">
            <form action="{{route('donations.store')}}" method="post">
            @csrf
                <div class="form">
                    <div class="title">Welcome</div>
                    <div class="subtitle">Donation form</div>
                    <div class="input-container ic1">
                        <input id="name" class="input" type="text" name="name" placeholder=" " />
                        <div class="cut"></div>
                        <label for="name" class="placeholder">Your Name</label>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-container ic2">
                        <input id="email" class="input" type="email" name="email" placeholder=" " />
                        <div class="cut cut-short"></div>
                        <label for="email" class="placeholder">Email</label>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-container ic2">
                        <input id="amount" class="input" type="number" name="amount" placeholder=" " />
                        <div class="cut cut-long"></div>
                        <label for="amount" class="placeholder">Amount of your donation</label>
                        @error('amount')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-container ic2">
                        <input id="message" class="input" type="text" name="message" placeholder=" "/>
                        <div class="cut"></div>
                        <label for="message" class="placeholder">Message</label>
                    </div>
                    <input type="submit" value="Submit" class="submit">
                </div>
            </form>
        </div>
</x-layout>
