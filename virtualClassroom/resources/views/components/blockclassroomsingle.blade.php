<div class="card card-margin">
    <div class="card-header no-border">
        <h5 class="card-title">{{$item->user}}</h5>
    </div>
    <div class="card-body pt-0">
        <div class="widget-49">
            <div class="widget-49-title-wrapper">
                <div class="widget-49-meeting-info">
                    <span class="widget-49-pro-title">{{$item->idcard}}</span>
                    <span class="widget-49-meeting-time">{{$item->email}}</span>
                </div>
            </div>
            <div class="widget-49-meeting-action">
                <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


@if( $item->type == 'classroom' )
   
    <script>

     
 

    $(document).ready(function(){
          let id = {{$item->id}}
          
          
          $.ajax({
                type: 'POST',
                url: "http://localhost:8001/classdata",
                data: {id: id},
                dataType: 'json',
                success: function(data){
                console.log(data)
                }
            });



      })

  

    </script>

@endif