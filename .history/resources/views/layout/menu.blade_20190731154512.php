<div class="col-md-3 ">
        <ul class="list-group" id="menu">

            @foreach ($theloai as $tl)
                
         
            <li href="#" class="list-group-item menu1 active">
              Thể Loại
            </li>

            <li href="#" class="list-group-item menu1">
                {{$tl->Ten}}
            </li>
            <ul>
                <li class="list-group-item">
                    <a href="#">Level2</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Level2</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Level2</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Level2</a>
                </li>
            </ul>
            @endforeach
            
        </ul>
    </div>
