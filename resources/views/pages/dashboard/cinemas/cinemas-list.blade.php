<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
new 
#[Layout('components.layouts.dashboard', ['title' => 'List Cinemas'])]
class extends Component{

};
?>
<div>
    <div class="row">
        <div class="col-12">
             <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between border-bottom border-light">
                <h4 class="header-title">List Cinema</h4>
                <div>
                    <a class="btn btn-primary" href="{{ route('dashboard.cinemas.add') }}">Add Cinema</a>
                </div>
            </div>
            <div class="card-body">
                <livewire:cinemas.cinemas-list />
            </div>
        </div>
        </div>
    </div>
</div>