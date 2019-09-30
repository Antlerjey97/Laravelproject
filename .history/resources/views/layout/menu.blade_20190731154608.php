<div class="col-md-3 ">
        <ul class="list-group" id="menu"> Thể Loại

            @foreach ($theloai as $tl)
                
         
            <li href="#" class="list-group-item menu1 active">
                    {{$tl->Ten}}
            </li> 

            <li href="#" class="list-group-item menu1">
               
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
