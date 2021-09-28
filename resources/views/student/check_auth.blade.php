@extends('layouts.main')

@section('page-title')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                    </ol>
                </div>
                <h4 class="page-title">Home</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->
@endsection

@section('content')

<style>
    .hover-scale i.fas {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }

    .ribbon-box .ribbon-two-secondary span {
        background: #C5B358 !important;
    }

</style>


@endsection

@section('js')
<script>

    var session_id = "{!! (session('ss_id'))?session('ss_id'):'' !!}";
    var user_id = "{!! (Auth::user())?Auth::user()->session_id:'' !!}";

    $('#show-reading').on('click', () => {
        
        if(user_id !== session_id) {
            alert('Your account login from another device!!', 'Warning Alert');
            window.location.href = "{{ route('user_logout')}}";
        }else{
            window.open("https://newcambridgethailand.com/isac_reading/access/G4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ/{{auth('web')->user()->std_id}}", '_blank');
        }
    });

</script>
@endsection

