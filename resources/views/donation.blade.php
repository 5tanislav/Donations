<x-layout>
    <div class="don">
        <div class="button">
            <form action="{{ route('donations.create') }}">
                <p><input class="btn" type="Submit" value="Donate"></p>
            </form>
        </div>
        @if(!is_null(session('status')) && !empty(session('message')))
            <div class="alert {{ session('status')
                ? 'alert-success' 
                : 'alert-danger' }} alert_message">
                {{ session('message') }}
            </div>
        @endif
        <div class="cards">
            <h3>Cards</h3>
        </div>
        <div class="row">
            <div class="col-header top">Top donator</div>
            <div class="col-header amount">Last month amount</div>
            <div class="col-header sum">Sum</div>
        </div>
        <div class="chart">
            <h3>Chart</h3>
        </div>  
        <div class="donators_table">
            <h3>Donators</h3>
        </div>
        <div class="donators">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount ($)</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tr>
                    <td>Prof. Creola Hayes</td>
                    <td>david64@gmail.com</td>
                    <td>209.69</td>
                    <td>rerum sit laboriosam natus laborum distinctio molestiae maiores tempora a</td>
                </tr>
                <tr>
                    <td>Francesca Christiansen V</td>
                    <td>dparisian@jerde.com</td>
                    <td>180.85</td>
                    <td>magnam iure cumque commodi aut deleniti debitis quis deserunt inventore </td>
                </tr>
            </table>
        </div>
    </div>
</x-layout>

