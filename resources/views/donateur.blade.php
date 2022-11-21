<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('storage/image/'.auth()->user()->name)}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{auth()->user()->name}}</p>
                <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="{{route('users.show',['user'=>auth()->user()->id])}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Profil</a>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button><i class="dropdown-item-icon mdi mdi-power text-primary me-2" style="border:none ;"></i>Déconnexion</button>
              </form>
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Déconnexion</a> -->
            </div>
    <h1>espace donateur</h1>
</body>
</html>