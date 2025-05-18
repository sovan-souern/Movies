<?php require_once 'Views/layout/header.php' ?>
<?php require_once 'Views/layout/nav.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Views/app.css">
    <!-- <link rel="stylesheet" href="/Views/grid.css"> -->
</head>
<body class="bg-dark text-white">
  

   

    <!-- Trends Now Section -->
    <section class="content-section">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="section-title">
                    <i class="fas fa-chart-line me-2"></i> Trends Now
                </h2>
                <div class="tabs">
                    <button class="tab-btn active">Popular</button>
                    <button class="tab-btn">Premieres</button>
                    <button class="tab-btn">Recently Added</button>
                </div>
            </div>

            <!-- Genre Filter -->
            <div class="genre-filter mb-4">
                <button class="genre-btn active">Action</button>
                <button class="genre-btn">Adventure</button>
                <button class="genre-btn">Animation</button>
                <button class="genre-btn">Biography</button>
                <button class="genre-btn">Crime</button>
                <button class="genre-btn">Comedy</button>
                <button class="genre-btn">Documentary</button>
                <button class="genre-btn">Drama</button>
                <button class="genre-btn more-btn"><i class="fas fa-chevron-right"></i></button>
            </div>

            <!-- Movie Carousel -->
            <div class="position-relative movie-carousel-container">
                <button class="carousel-nav-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                <div class="movie-carousel">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMjI3Nzg0MTM5NF5BMl5BanBnXkFtZTgwOTE2MTgwNTM@._V1_.jpg" alt="Pacific Rim 2: Uprising">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Pacific Rim 2: Uprising</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>5.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BOTM2NTI3NTc3Nl5BMl5BanBnXkFtZTgwNzM1OTQyNTM@._V1_.jpg" alt="Star Wars: Solo">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Star Wars: Solo</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTA3MDkxOTc4NDdeQTJeQWpwZ15BbWU4MDAxNzgyNTQz._V1_.jpg" alt="Red Sparrow">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Red Sparrow</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BOTY4NDcyZGQtYmVlNy00ODgwLTljYTMtYzQ2OTE3NDhjODMwXkEyXkFqcGdeQXVyNzYzODM3Mzg@._V1_.jpg" alt="Tomb Raider">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Tomb Raider</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMjM3MjQ1MzkxNl5BMl5BanBnXkFtZTgwODk1ODgyMjI@._V1_.jpg" alt="Bad Samaritan">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Bad Samaritan</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-nav-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Movies Section -->
    <section class="content-section">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="section-title">
                    <i class="fas fa-film me-2"></i> Movies
                </h2>
                <div class="tabs">
                    <button class="tab-btn active">Series</button>
                    <button class="tab-btn">Original Series</button>
                    <button class="tab-btn"><i class="fas fa-search"></i> Search</button>
                </div>
            </div>

            <!-- Genre Filter -->
            <div class="genre-filter mb-3">
                <button class="genre-btn active">Action</button>
                <button class="genre-btn">Adventure</button>
                <button class="genre-btn">Animation</button>
                <button class="genre-btn">Biography</button>
                <button class="genre-btn">Crime</button>
                <button class="genre-btn">Comedy</button>
                <button class="genre-btn">Documentary</button>
                <button class="genre-btn">Drama</button>
                <button class="genre-btn more-btn"><i class="fas fa-chevron-right"></i></button>
            </div>

            <!-- Sort Options -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="sort-options">
                    <span class="me-2">Sort by:</span>
                    <div class="dropdown d-inline-block me-2">
                        <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Latest
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item active" href="#">Latest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                            <li><a class="dropdown-item" href="#">Popular</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-inline-block me-2">
                        <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Year
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">2023</a></li>
                            <li><a class="dropdown-item" href="#">2022</a></li>
                            <li><a class="dropdown-item active" href="#">2018</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-sm btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            A-Z
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item active" href="#">A-Z</a></li>
                            <li><a class="dropdown-item" href="#">Z-A</a></li>
                        </ul>
                    </div>
                </div>
                <div class="rating-filter d-flex align-items-center">
                    <i class="fas fa-star text-warning me-2"></i>
                    <input type="range" class="form-range me-2" min="0" max="10" step="0.1" value="5.0" id="ratingRange" style="width: 100px;">
                    <span id="ratingValue">5.0</span>
                </div>
            </div>

            <!-- Movie Grid -->
            <div class="row movie-grid">
                <!-- First Row -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg" alt="Deadpool 2">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Deadpool 2</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>8.1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTk5ODk1NDkxMF5BMl5BanBnXkFtZTgwNzQyOTkxMTE@._V1_.jpg" alt="The Meg">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">The Meg</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNDIwMDIxNzk3Ml5BMl5BanBnXkFtZTgwMTg0MzQ4MDE@._V1_.jpg" alt="October">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">October</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>8.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTc2MTQ3MDA1Nl5BMl5BanBnXkFtZTgwOTAyMjU2MzE@._V1_.jpg" alt="Incredibles 2">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Incredibles 2</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>7.7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNDk3NTEwNjc0MV5BMl5BanBnXkFtZTgwNzYxNTMwMDI@._V1_.jpg" alt="The 15:17 to Paris">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">The 15:17 to Paris</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNDA1NjA3ODU3OV5BMl5BanBnXkFtZTgwOTg3MTIwNTM@._V1_.jpg" alt="Rampage">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Rampage</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="row movie-grid">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTYyNzk3MDc2NF5BMl5BanBnXkFtZTgwMDk3OTM1NDM@._V1_.jpg" alt="Maze Runner: Death Cure">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Maze Runner: Death Cure</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNDk3NTEwNjc0MV5BMl5BanBnXkFtZTgwNzYxNTMwMDI@._V1_.jpg" alt="The First Purge">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">The First Purge</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTg2MTMyMzU0M15BMl5BanBnXkFtZTgwOTU3ODk4NTM@._V1_.jpg" alt="Christopher Robin">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Christopher Robin</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>7.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNzAwNzUzNjY4MV5BMl5BanBnXkFtZTgwMTQ5MzM0NjM@._V1_.jpg" alt="Venom">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Venom</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>7.2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTk0MTI0OTg3NF5BMl5BanBnXkFtZTgwNjIyOTgxNTM@._V1_.jpg" alt="Peter Rabbit">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Peter Rabbit</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BNjg1NTc2MDktZTU5Ni00OTZiLWIyNjQtN2FhNGY4MzAxNmZkXkEyXkFqcGdeQXVyNjk5NDA3OTk@._V1_.jpg" alt="Jurassic World: Fallen Kingdom">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Jurassic World: Fallen Kingdom</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Player Section -->
    <section class="video-player-section">
        <div class="container-fluid px-4">
            <div class="video-player-container">
                <div class="video-info mb-2">
                    <h3 class="video-title">Jurassic World: Fallen Kingdom (2018)</h3>
                   
                </div>
                <div class="video-player">
                    <img src="https://m.media-amazon.com/images/M/MV5BNzIxMjYwNDEwN15BMl5BanBnXkFtZTgwMzk5MDI3NTM@._V1_.jpg" alt="Jurassic World: Fallen Kingdom" class="img-fluid">
                    <div class="video-controls">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-dark me-2"><i class="fas fa-pause"></i></button>
                                <button class="btn btn-sm btn-dark me-2"><i class="fas fa-redo"></i></button>
                                <span class="time-display">00:24 / 01:45:00</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-dark me-2"><i class="fas fa-volume-up"></i></button>
                                <button class="btn btn-sm btn-dark me-2"><i class="fas fa-closed-captioning"></i></button>
                                <button class="btn btn-sm btn-dark"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Movies Section -->
    <section class="content-section">
        <div class="container-fluid px-4">
            <div class="position-relative movie-carousel-container">
                <button class="carousel-nav-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                <div class="movie-carousel">
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMjEyMDM0NzQ5NV5BMl5BanBnXkFtZTgwMDQzMzU5NTM@._V1_.jpg" alt="Mute">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Mute</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>5.4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMjQ2MTIyNjMzMV5BMl5BanBnXkFtZTgwNDM5MTIzMzI@._V1_.jpg" alt="Life of the Party">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Life of the Party</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>5.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTg0NjEwNjUxM15BMl5BanBnXkFtZTgwMzk0MzgwMzI@._V1_.jpg" alt="Ant-Man and the Wasp">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Ant-Man and the Wasp</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMjA2NDYxMzE1MF5BMl5BanBnXkFtZTgwMzQxNzQxMDE@._V1_.jpg" alt="Sicario: Day of the Soldado">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Sicario: Day of the Soldado</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>7.1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTc3MzQ3NjA5N15BMl5BanBnXkFtZTcwMzY5OTY3Nw@@._V1_.jpg" alt="The Commuter">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">The Commuter</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>6.3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-card">
                        <div class="movie-poster">
                            <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_.jpg" alt="Mission: Impossible - Fallout">
                            <div class="movie-overlay">
                                <button class="play-btn"><i class="fas fa-play"></i></button>
                            </div>
                        </div>
                        <div class="movie-info">
                            <h5 class="movie-title">Mission: Impossible - Fallout</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="movie-year">2018</span>
                                <div class="movie-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>7.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-nav-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Add Button -->
    <button class="add-btn"><i class="fas fa-plus"></i></button>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>

<style>
   /* Global Styles */
:root {
    --netflix-red: #e50914;
    --netflix-black: #141414;
    --netflix-dark: #181818;
    --netflix-light-dark: #222222;
    --netflix-gray: #808080;
    --netflix-light-gray: #b3b3b3;
    --card-hover-scale: 1.05;
    --transition-speed: 0.3s;
}


/* Scrollbar Styling */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.2);
}

::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.3);
}




.rating {
    font-weight: bold;
    color: #ffc107;
}

.btn-danger {
    background-color: var(--netflix-red);
    border: none;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s;
    box-shadow: 0 4px 10px rgba(229, 9, 20, 0.3);
}

.btn-danger:hover {
    background-color: #f11722;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(229, 9, 20, 0.4);
}

.btn-danger:active {
    transform: translateY(0);
    box-shadow: 0 2px 5px rgba(229, 9, 20, 0.4);
}

.btn-outline-light {
    border: 2px solid rgba(255, 255, 255, 0.7);
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s;
}

.btn-outline-light:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: white;
    transform: translateY(-2px);
}

.btn-outline-light:active {
    transform: translateY(0);
}

/* Content Sections */
.content-section {
    padding: 25px 0;
    position: relative;
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.section-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    letter-spacing: -0.5px;
}

.section-title i {
    color: var(--netflix-red);
    margin-right: 10px;
    filter: drop-shadow(0 0 3px rgba(229, 9, 20, 0.3));
}

/* Tabs */
.tabs {
    display: flex;
    align-items: center;
}

.tab-btn {
    background: none;
    border: none;
    color: var(--netflix-gray);
    padding: 5px 15px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
}

.tab-btn.active {
    color: white;
    font-weight: 600;
}

.tab-btn::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: var(--netflix-red);
    transition: width 0.3s, left 0.3s;
}

.tab-btn.active::after {
    width: 70%;
    left: 15%;
}

.tab-btn:hover {
    color: white;
}

.tab-btn:hover::after {
    width: 70%;
    left: 15%;
}

/* Genre Filter */
.genre-filter {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE and Edge */
    margin-bottom: 25px;
    padding: 5px 0;
}

.genre-filter::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

.genre-btn {
    background-color: rgba(255, 255, 255, 0.08);
    border: none;
    color: white;
    padding: 8px 18px;
    border-radius: 20px;
    margin-right: 12px;
    font-size: 14px;
    white-space: nowrap;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.genre-btn.active {
    background-color: var(--netflix-red);
    box-shadow: 0 4px 8px rgba(229, 9, 20, 0.3);
}

.genre-btn:hover {
    background-color: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
}

.genre-btn.active:hover {
    background-color: #f11722;
}

.more-btn {
    background-color: transparent;
    border: 1px solid var(--netflix-gray);
    color: var(--netflix-gray);
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    transition: all 0.3s;
}

.more-btn:hover {
    border-color: white;
    color: white;
    background-color: rgba(255, 255, 255, 0.1);
}

/* Movie Carousel */
.movie-carousel-container {
    position: relative;
    margin-bottom: 40px;
}

.movie-carousel {
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 15px 0;
    scroll-behavior: smooth;
    gap: 15px;
}

.movie-carousel::-webkit-scrollbar {
    display: none;
}

.carousel-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.7);
    border: none;
    color: white;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s;
    opacity: 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.movie-carousel-container:hover .carousel-nav-btn {
    opacity: 1;
}

.carousel-nav-btn:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-50%) scale(1.1);
}

.prev-btn {
    left: -22px;
}

.next-btn {
    right: -22px;
}

/* Movie Card */
.movie-card {
    flex: 0 0 auto;
    width: 200px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    position: relative;
    z-index: 1;
}

.movie-card:hover {
    transform: scale(var(--card-hover-scale));
    z-index: 2;
}

.movie-poster {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    height: 300px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s;
}

.movie-card:hover .movie-poster {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
}

.movie-poster img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s;
}

.movie-card:hover .movie-poster img {
    transform: scale(1.1);
    filter: brightness(1.1);
}

.movie-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.2) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.movie-card:hover .movie-overlay {
    opacity: 1;
}

.play-btn {
    background-color: rgba(255, 255, 255, 0.2);
    border: 2px solid white;
    color: white;
    width: 54px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    transform: scale(0.8);
    opacity: 0;
}

.movie-card:hover .play-btn {
    transform: scale(1);
    opacity: 1;
}

.play-btn:hover {
    background-color: var(--netflix-red);
    border-color: var(--netflix-red);
    transform: scale(1.1);
}

.movie-info {
    padding: 12px 5px;
    transition: all 0.3s;
}

.movie-card:hover .movie-info {
    transform: translateY(5px);
}

.movie-title {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 6px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: color 0.3s;
}

.movie-card:hover .movie-title {
    color: #fff;
}

.movie-year {
    color: var(--netflix-light-gray);
    font-size: 13px;
    transition: color 0.3s;
}

.movie-card:hover .movie-year {
    color: #ddd;
}

.movie-rating {
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.movie-rating i {
    margin-right: 4px;
}

/* Movie Grid */
.movie-grid {
    margin-bottom: 40px;
}

.movie-grid .movie-card {
    width: 100%;
    margin-right: 0;
    margin-bottom: 20px;
}

.movie-grid .movie-poster {
    height: 250px;
    transition: all 0.3s;
}

.movie-grid .movie-card:hover .movie-poster {
    transform: translateY(-5px);
}

/* Sort Options */
.sort-options {
    color: var(--netflix-light-gray);
    font-size: 14px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.dropdown-menu-dark {
    background-color: rgba(24, 24, 24, 0.95);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    padding: 8px 0;
    margin-top: 8px;
    border-radius: 6px;
}

.dropdown-item {
    color: var(--netflix-light-gray);
    padding: 8px 16px;
    transition: all 0.2s;
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
}

.dropdown-item.active {
    background-color: var(--netflix-red);
    color: white;
}

.btn-dark {
    background-color: rgba(255, 255, 255, 0.1);
    border: none;
    transition: all 0.3s;
}

.btn-dark:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Rating Filter */
.rating-filter {
    color: var(--netflix-light-gray);
    font-size: 14px;
    display: flex;
    align-items: center;
}

.form-range {
    height: 6px;
}

.form-range::-webkit-slider-thumb {
    background: var(--netflix-red);
    box-shadow: 0 0 5px rgba(229, 9, 20, 0.5);
}

.form-range::-moz-range-thumb {
    background: var(--netflix-red);
    box-shadow: 0 0 5px rgba(229, 9, 20, 0.5);
}

#ratingValue {
    min-width: 30px;
    text-align: center;
    font-weight: 600;
    color: #ffc107;
}

/* Video Player Section */
.video-player-section {
    margin: 40px 0;
}

/* Video Player Section */
.video-player-section {
    margin: 30px 0;
}

.video-player-container {
    background-color: rgba(24, 24, 24, 0.7);
    border-radius: 12px;
    overflow: hidden;
    padding: 15px; /* Reduced from 20px */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s;
    max-width: 95%; /* Added to make it smaller */
    margin: 0 auto; /* Center it */
}

.video-player-container:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    transform: translateY(-5px);
}

.video-title {
    font-size: 18px; /* Reduced from 20px */
    font-weight: 700;
    margin-bottom: 6px; /* Reduced from 8px */
    letter-spacing: -0.5px;

}

.badge {
    font-weight: 600;
    padding: 4px 8px; /* Reduced from 5px 10px */
    border-radius: 4px;
    letter-spacing: 0.5px;
    font-size: 12px; /* Added smaller font size */
}

.video-actions button {
    width: 32px; /* Reduced from 36px */
    height: 32px; /* Reduced from 36px */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
}

.video-player {
    position: relative;
    border-radius: 8px; /* Reduced from 10px */
    overflow: hidden;
    margin-top: 12px; /* Reduced from 15px */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    height: 650px; /* Added fixed height to make it smaller */
}

.video-player img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Changed from 'auto' to 'cover' to fill the container */
    display: block;
    transition: all 0.5s;
}

.video-controls {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px; /* Reduced from 20px */
    background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.5) 60%, rgba(0, 0, 0, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s;
}

.time-display {
    color: white;
    font-size: 12px; /* Reduced from 14px */
    font-weight: 500;
}

/* Responsive adjustments for the video player */
@media (max-width: 992px) {
    .video-player-container {
        max-width: 90%;
    }
    
    .video-player {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .video-player-container {
        max-width: 95%;
    }
    
    .video-player {
        height: 250px;
    }
}

@media (max-width: 576px) {
    .video-player-container {
        max-width: 100%;
    }
    
    .video-player {
        height: 200px;
    }
}

.video-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 8px;
    letter-spacing: -0.5px;
}

.badge {
    font-weight: 600;
    padding: 5px 10px;
    border-radius: 4px;
    letter-spacing: 0.5px;
}

.video-actions button {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
}

.video-actions button:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: scale(1.1);
}

.video-player {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
}

.video-player img {
    width: 100%;
    height: auto;
    display: block;
    transition: all 0.5s;
}

.video-player:hover img {
    transform: scale(1.02);
}

.video-controls {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.5) 60%, rgba(0, 0, 0, 0) 100%);
    opacity: 0;
    transition: opacity 0.3s;
}

.video-player:hover .video-controls {
    opacity: 1;
}

.time-display {
    color: white;
    font-size: 14px;
    font-weight: 500;
}

.progress {
    height: 5px;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 3px;
    overflow: hidden;
    cursor: pointer;
    transition: height 0.2s;
}

.video-player:hover .progress {
    height: 6px;
}

.progress-bar {
    background-color: var(--netflix-red);
    transition: width 0.1s linear;
    position: relative;
}

.progress-bar::after {
    content: '';
    position: absolute;
    right: -5px;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background-color: var(--netflix-red);
    border-radius: 50%;
    opacity: 0;
    transition: opacity 0.2s;
}

.progress:hover .progress-bar::after {
    opacity: 1;
}

/* Add Button */
.add-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: var(--netflix-red);
    color: white;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(229, 9, 20, 0.4);
    z-index: 1000;
    transition: all 0.3s;
}

.add-btn:hover {
    transform: scale(1.1) rotate(90deg);
    box-shadow: 0 8px 20px rgba(229, 9, 20, 0.5);
}

/* Loading Animation */
.loaded .hero-content,
.loaded .content-section {
    animation: none;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .hero-section {
        height: 75vh;
    }
    
    .hero-content {
        padding-top: 150px;
    }
}

@media (max-width: 992px) {
    .hero-section {
        height: 65vh;
    }
    
    .hero-content {
        padding-top: 120px;
    }
    
    .movie-card {
        width: 170px;
    }
    
    .movie-poster {
        height: 255px;
    }
    
    .hero-content h1 {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .hero-section {
        height: 55vh;
    }
    
    .hero-content {
        padding-top: 100px;
    }
    
    .movie-card {
        width: 150px;
    }
    
    .movie-poster {
        height: 225px;
    }
    
    .tabs {
        display: none;
    }
    
    .hero-content h1 {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 20px;
    }
    
    .video-title {
        font-size: 18px;
    }
}

@media (max-width: 576px) {
    .hero-section {
        height: 45vh;
    }
    
    .hero-content {
        padding-top: 80px;
    }
    
    .movie-card {
        width: 130px;
    }
    
    .movie-poster {
        height: 195px;
    }
    
    .genre-btn {
        padding: 6px 14px;
        font-size: 12px;
    }
    
    .hero-content h1 {
        font-size: 1.8rem;
    }
    
    .hero-content p {
        font-size: 0.9rem;
    }
    
    .add-btn {
        width: 48px;
        height: 48px;
        bottom: 20px;
        right: 20px;
    }
    
    .sort-options {
        font-size: 12px;
    }
    
    .rating-filter {
        font-size: 12px;
    }
}

/* Additional Animations */
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

.btn-danger {
    animation: pulse 2s infinite;
}

.btn-danger:hover {
    animation: none;
}

/* Shimmer Effect for Loading */
.shimmer {
    position: relative;
    overflow: hidden;
    background: linear-gradient(90deg, var(--netflix-dark) 0%, var(--netflix-light-dark) 50%, var(--netflix-dark) 100%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% {
        background-position: -200% 0;
    }
    100% {
        background-position: 200% 0;
    }
}

/* Netflix Logo Animation */
.navbar-brand {
    position: relative;
    overflow: hidden;
}

.navbar-brand::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 100%);
    animation: shine 3s infinite;
}

@keyframes shine {
    0% {
        left: -100%;
    }
    20% {
        left: 100%;
    }
    100% {
        left: 100%;
    }
}

/* Floating Animation for Cards */
.movie-card:hover {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% {
        transform: scale(var(--card-hover-scale)) translateY(0px);
    }
    50% {
        transform: scale(var(--card-hover-scale)) translateY(-5px);
    }
    100% {
        transform: scale(var(--card-hover-scale)) translateY(0px);
    }
}

/* Improved Typography */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Netflix Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

/* Improved Focus States */
button:focus, a:focus {
    outline: 2px solid rgba(229, 9, 20, 0.5);
    outline-offset: 2px;
}

/* Accessibility Improvements */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}
</style>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Header Scroll Effect
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Carousel Navigation with Improved Scrolling
    const carousels = document.querySelectorAll('.movie-carousel');
    const prevBtns = document.querySelectorAll('.prev-btn');
    const nextBtns = document.querySelectorAll('.next-btn');

    carousels.forEach((carousel, index) => {
        const prevBtn = prevBtns[index];
        const nextBtn = nextBtns[index];
        
        if (prevBtn && nextBtn) {
            // Calculate scroll amount based on carousel width
            const scrollAmount = () => {
                const cardWidth = 215; // Card width + margin
                const visibleWidth = carousel.offsetWidth;
                const cardsToScroll = Math.floor(visibleWidth / cardWidth);
                return cardsToScroll * cardWidth;
            };
            
            prevBtn.addEventListener('click', () => {
                carousel.scrollBy({ 
                    left: -scrollAmount(), 
                    behavior: 'smooth' 
                });
                
                // Add click effect
                prevBtn.classList.add('clicked');
                setTimeout(() => {
                    prevBtn.classList.remove('clicked');
                }, 200);
            });
            
            nextBtn.addEventListener('click', () => {
                carousel.scrollBy({ 
                    left: scrollAmount(), 
                    behavior: 'smooth' 
                });
                
                // Add click effect
                nextBtn.classList.add('clicked');
                setTimeout(() => {
                    nextBtn.classList.remove('clicked');
                }, 200);
            });
            
            // Show/hide buttons based on scroll position
            carousel.addEventListener('scroll', () => {
                if (carousel.scrollLeft <= 10) {
                    prevBtn.style.opacity = '0';
                } else {
                    prevBtn.style.opacity = '1';
                }
                
                if (carousel.scrollLeft >= carousel.scrollWidth - carousel.offsetWidth - 10) {
                    nextBtn.style.opacity = '0';
                } else {
                    nextBtn.style.opacity = '1';
                }
            });
            
            // Initial check
            if (carousel.scrollLeft <= 10) {
                prevBtn.style.opacity = '0';
            }
        }
    });

    // Genre Filter Buttons with Animation
    const genreBtns = document.querySelectorAll('.genre-btn:not(.more-btn)');
    
    genreBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Find all genre buttons in the same filter group
            const filterGroup = btn.closest('.genre-filter');
            const btnsInGroup = filterGroup.querySelectorAll('.genre-btn:not(.more-btn)');
            
            // Remove active class from all buttons in the group
            btnsInGroup.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button with animation
            btn.classList.add('active');
            
            // Add ripple effect
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            btn.appendChild(ripple);
            
            const rect = btn.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            
            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${event.clientX - rect.left - size / 2}px`;
            ripple.style.top = `${event.clientY - rect.top - size / 2}px`;
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
            
            // Filter animation for movie cards
            const movieCards = document.querySelectorAll('.movie-card');
            const genre = btn.textContent.trim().toLowerCase();
            
            movieCards.forEach(card => {
                // Simulate filtering - in a real app, you'd check if the movie belongs to the selected genre
                const shouldShow = Math.random() > 0.3; // Random for demo
                
                if (shouldShow) {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 300);
                }
            });
            
            console.log('Selected genre:', genre);
        });
    });

    // Tab Buttons with Smooth Transitions
    const tabBtns = document.querySelectorAll('.tab-btn');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Find all tab buttons in the same tab group
            const tabGroup = btn.closest('.tabs');
            const btnsInGroup = tabGroup.querySelectorAll('.tab-btn');
            
            // Remove active class from all buttons in the group
            btnsInGroup.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button with animation
            btn.classList.add('active');
            
            // Simulate content change with fade effect
            const parentSection = btn.closest('.content-section');
            const contentArea = parentSection.querySelector('.movie-carousel-container');
            
            if (contentArea) {
                contentArea.style.opacity = '0';
                contentArea.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    contentArea.style.opacity = '1';
                    contentArea.style.transform = 'translateY(0)';
                }, 300);
            }
            
            console.log('Selected tab:', btn.textContent.trim());
        });
    });

    // Rating Range Slider with Live Update
    const ratingRange = document.getElementById('ratingRange');
    const ratingValue = document.getElementById('ratingValue');
    
    if (ratingRange && ratingValue) {
        // Update value with animation
        ratingRange.addEventListener('input', () => {
            // Animate the rating value
            ratingValue.style.transform = 'scale(1.2)';
            ratingValue.style.color = '#ffc107';
            
            setTimeout(() => {
                ratingValue.style.transform = 'scale(1)';
                
                // Change color based on rating
                if (ratingRange.value >= 7) {
                    ratingValue.style.color = '#4caf50'; // Good rating
                } else if (ratingRange.value >= 5) {
                    ratingValue.style.color = '#ffc107'; // Average rating
                } else {
                    ratingValue.style.color = '#f44336'; // Poor rating
                }
            }, 200);
            
            ratingValue.textContent = ratingRange.value;
            
            // Filter movies based on rating
            const movieCards = document.querySelectorAll('.movie-card');
            
            movieCards.forEach(card => {
                const movieRating = card.querySelector('.movie-rating span');
                if (movieRating) {
                    const rating = parseFloat(movieRating.textContent);
                    
                    if (rating < parseFloat(ratingRange.value)) {
                        card.style.opacity = '0.5';
                        card.style.transform = 'scale(0.95)';
                    } else {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }
                }
            });
            
            console.log('Minimum rating:', ratingRange.value);
        });
    }

    // Movie Card Click with Enhanced Interaction
    const movieCards = document.querySelectorAll('.movie-card');
    
    movieCards.forEach(card => {
        // Add hover sound effect (commented out to avoid autoplay issues)
        /*
        card.addEventListener('mouseenter', () => {
            const hoverSound = new Audio('hover-sound.mp3');
            hoverSound.volume = 0.2;
            hoverSound.play();
        });
        */
        
        card.addEventListener('click', () => {
            const title = card.querySelector('.movie-title').textContent;
            console.log('Selected movie:', title);
            
            // Highlight selected movie
            movieCards.forEach(c => c.classList.remove('selected'));
            card.classList.add('selected');
            
            // Update video player with selected movie
            const videoTitle = document.querySelector('.video-title');
            const videoImage = document.querySelector('.video-player img');
            const movieImage = card.querySelector('.movie-poster img').src;
            
            if (videoTitle && videoImage) {
                // Animate video player update
                const videoPlayerSection = document.querySelector('.video-player-section');
                videoPlayerSection.style.opacity = '0';
                videoPlayerSection.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    videoTitle.textContent = title + ' (2018)';
                    videoImage.src = movieImage;
                    
                    videoPlayerSection.style.opacity = '1';
                    videoPlayerSection.style.transform = 'translateY(0)';
                    
                    // Scroll to video player with smooth animation
                    videoPlayerSection.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 300);
            }
        });
    });

    // Video Player Controls with Enhanced Interaction
    const videoPlayer = document.querySelector('.video-player');
    const playPauseBtn = document.querySelector('.video-controls .fa-pause');
    const progressBar = document.querySelector('.progress-bar');
    const timeDisplay = document.querySelector('.time-display');
    
    if (videoPlayer && playPauseBtn) {
        // Toggle play/pause with animation
        playPauseBtn.addEventListener('click', () => {
            // Toggle between play and pause with animation
            playPauseBtn.style.transform = 'scale(0.8)';
            
            setTimeout(() => {
                if (playPauseBtn.classList.contains('fa-pause')) {
                    playPauseBtn.classList.remove('fa-pause');
                    playPauseBtn.classList.add('fa-play');
                    // Pause video simulation
                    clearInterval(progressInterval);
                } else {
                    playPauseBtn.classList.remove('fa-play');
                    playPauseBtn.classList.add('fa-pause');
                    // Play video simulation
                    startProgressSimulation();
                }
                
                playPauseBtn.style.transform = 'scale(1)';
            }, 100);
        });
        
        // Simulate video progress
        let currentProgress = 25; // Starting at 25%
        let progressInterval;
        
        function startProgressSimulation() {
            progressInterval = setInterval(() => {
                if (currentProgress < 100) {
                    currentProgress += 0.5;
                    updateProgress();
                } else {
                    clearInterval(progressInterval);
                    playPauseBtn.classList.remove('fa-pause');
                    playPauseBtn.classList.add('fa-play');
                }
            }, 1000);
        }
        
        function updateProgress() {
            if (progressBar) {
                progressBar.style.width = currentProgress + '%';
                
                // Update time display
                const totalSeconds = 105 * 60; // 1h45m in seconds
                const currentSeconds = Math.floor(totalSeconds * (currentProgress / 100));
                
                const minutes = Math.floor(currentSeconds / 60);
                const seconds = currentSeconds % 60;
                const formattedTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')} / 01:45:00`;
                
                if (timeDisplay) {
                    timeDisplay.textContent = formattedTime;
                }
            }
        }
        
        // Click on progress bar to seek
        const progressContainer = document.querySelector('.progress');
        if (progressContainer) {
            progressContainer.addEventListener('click', (e) => {
                const rect = progressContainer.getBoundingClientRect();
                const clickPosition = (e.clientX - rect.left) / rect.width;
                currentProgress = clickPosition * 100;
                
                updateProgress();
                
                // Visual feedback
                progressContainer.style.height = '8px';
                setTimeout(() => {
                    progressContainer.style.height = '5px';
                }, 200);
            });
        }
        
        // Volume control simulation
        const volumeBtn = document.querySelector('.fa-volume-up');
        if (volumeBtn) {
            volumeBtn.addEventListener('click', () => {
                if (volumeBtn.classList.contains('fa-volume-up')) {
                    volumeBtn.classList.remove('fa-volume-up');
                    volumeBtn.classList.add('fa-volume-mute');
                } else {
                    volumeBtn.classList.remove('fa-volume-mute');
                    volumeBtn.classList.add('fa-volume-up');
                }
            });
        }
        
        // Fullscreen toggle
        const fullscreenBtn = document.querySelector('.fa-expand');
        if (fullscreenBtn) {
            fullscreenBtn.addEventListener('click', () => {
                if (fullscreenBtn.classList.contains('fa-expand')) {
                    fullscreenBtn.classList.remove('fa-expand');
                    fullscreenBtn.classList.add('fa-compress');
                    
                    // Simulate fullscreen
                    videoPlayer.style.position = 'fixed';
                    videoPlayer.style.top = '0';
                    videoPlayer.style.left = '0';
                    videoPlayer.style.width = '100vw';
                    videoPlayer.style.height = '100vh';
                    videoPlayer.style.zIndex = '9999';
                    videoPlayer.style.borderRadius = '0';
                } else {
                    fullscreenBtn.classList.remove('fa-compress');
                    fullscreenBtn.classList.add('fa-expand');
                    
                    // Exit fullscreen
                    videoPlayer.style.position = 'relative';
                    videoPlayer.style.top = 'auto';
                    videoPlayer.style.left = 'auto';
                    videoPlayer.style.width = '100%';
                    videoPlayer.style.height = 'auto';
                    videoPlayer.style.zIndex = '1';
                    videoPlayer.style.borderRadius = '10px';
                }
            });
        }
    }

    // Add Button with Animation
    const addBtn = document.querySelector('.add-btn');
    
    if (addBtn) {
        addBtn.addEventListener('click', () => {
            // Animate button
            addBtn.style.transform = 'scale(0.8) rotate(45deg)';
            
            setTimeout(() => {
                addBtn.style.transform = 'scale(1.1) rotate(90deg)';
                
                // Show a custom tooltip
                const tooltip = document.createElement('div');
                tooltip.classList.add('custom-tooltip');
                tooltip.textContent = 'Add new content';
                tooltip.style.position = 'absolute';
                tooltip.style.bottom = '70px';
                tooltip.style.right = '30px';
                tooltip.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                tooltip.style.color = 'white';
                tooltip.style.padding = '10px 15px';
                tooltip.style.borderRadius = '5px';
                tooltip.style.zIndex = '1001';
                tooltip.style.opacity = '0';
                tooltip.style.transform = 'translateY(10px)';
                tooltip.style.transition = 'all 0.3s';
                
                document.body.appendChild(tooltip);
                
                setTimeout(() => {
                    tooltip.style.opacity = '1';
                    tooltip.style.transform = 'translateY(0)';
                }, 100);
                
                setTimeout(() => {
                    tooltip.style.opacity = '0';
                    tooltip.style.transform = 'translateY(10px)';
                    
                    setTimeout(() => {
                        tooltip.remove();
                    }, 300);
                }, 2000);
            }, 200);
            
            alert('Add new content feature would go here!');
        });
    }

    // Lazy Loading Images
    const lazyImages = document.querySelectorAll('.movie-poster img');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.add('loaded');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => {
            // Store original src in data-src if not already there
            if (!img.dataset.src && img.src) {
                img.dataset.src = img.src;
                // Set a low-res placeholder or blurred version
                // img.src = 'placeholder.jpg';
            }
            imageObserver.observe(img);
        });
    }

    // Simulate loading delay for a more realistic experience
    setTimeout(() => {
        document.body.classList.add('loaded');
        
        // Add entrance animations for sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach((section, index) => {
            setTimeout(() => {
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }, 800);

    // Add CSS for dynamic elements
    const style = document.createElement('style');
    style.textContent = `
        .ripple {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .clicked {
            transform: translateY(-50%) scale(0.9) !important;
        }
        
        .movie-card.selected {
            transform: scale(1.05);
            z-index: 2;
        }
        
        .movie-card.selected .movie-poster {
            box-shadow: 0 8px 25px rgba(229, 9, 20, 0.3);
            border: 2px solid var(--netflix-red);
        }
        
        .content-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s, transform 0.5s;
        }
        
        .movie-poster img {
            opacity: 0;
            transition: opacity 0.5s, transform 0.5s;
        }
        
        .movie-poster img.loaded {
            opacity: 1;
        }
        
        .custom-tooltip::after {
            content: '';
            position: absolute;
            bottom: -5px;
            right: 20px;
            width: 10px;
            height: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            transform: rotate(45deg);
        }
    `;
    document.head.appendChild(style);
});
</script>
