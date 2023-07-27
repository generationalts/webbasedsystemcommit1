<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<section>
    <nav class="fixed-nav">
        <div class="logo">
           GTS
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
        </label>
        <ul>
           <li><a class="active" href="#">Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#activities">Activities</a></li>
           <li><a href="#visits">Gallery</a></li>
           <li><a href="#contact">Contact Us</a></li>
           <li><a href="{{ route('register') }}">Register</a></li>
           <li><a href="{{ route('login') }}">login</a></li>
           <li><a href="#">Join us</a></li>
        </ul>
     </nav>

</section>

  <main>
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:50%;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/jose.jpg') }}" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption text-center overlay-text d-flex align-items-center">
                        <h5 class="text-light display-4 d-none d-sm-block">JOSEPHINE CHILDRENS HOME VISIT 2019</h5>
                        <h5 class="text-light display-5 d-block d-sm-none">JOSEPHINE CHILDRENS HOME VISIT 2019</h5>
                        <p class="text-light lead d-none d-sm-block">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        <p class="text-light d-block d-sm-none">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/aged.jpg') }}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption text-center overlay-text d-flex align-items-center">
                        <h5 class="text-light display-4 d-none d-sm-block">VISIT TO SAGANA HOME FOR THE AGED 03/04/2019</h5>
                        <h5 class="text-light display-5 d-block d-sm-none">VISIT TO SAGANA HOME FOR THE AGED 03/04/2019</h5>
                        <p class="text-light lead d-none d-sm-block">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER of CHILDERN WE DIDI THIS AND THAT</p>
                        <p class="text-light d-block d-sm-none">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('/images/muranga.jpg') }}" class="d-block w-100" alt="Image 2">
                        <div class="carousel-caption text-center overlay-text d-flex align-items-center">
                        <h5 class="text-light display-4 d-none d-sm-block">MURANG'A RESCUE CENTER 10/28/2019</h5>
                        <h5 class="text-light display-5 d-block d-sm-none">MURANG'A RESCUE CENTER 10/28/2019</h5>
                        <p class="text-light lead d-none d-sm-block">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        <p class="text-light d-block d-sm-none">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('/images/chid.jpg') }}" class="d-block w-100" alt="Image 3">
                        <div class="carousel-caption text-center overlay-text d-flex align-items-center">
                        <h5 class="text-light display-4 d-none d-sm-block">WAMUMU REHABIRITATION CENTER MWEA KIRINYAGA</h5>
                        <h5 class="text-light display-5 d-block d-sm-none">WAMUMU REHABIRITATION CENTER MWEA KIRINYAGA</h5>
                        <p class="text-light lead d-none d-sm-block">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDEREN WE DIDI THIS AND THAT</p>
                        <p class="text-light d-block d-sm-none">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('/images/embu.jpg') }}" class="d-block w-100" alt="Image 2">
                        <div class="carousel-caption text-center overlay-text d-flex align-items-center">
                        <h5 class="text-light display-4 d-none d-sm-block">EMBU CHIDRENS HOME VISIT</h5>
                        <h5 class="text-light display-5 d-block d-sm-none">EMBU CHIDRENS HOME VISIT</h5>
                        <p class="text-light lead d-none d-sm-block">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        <p class="text-light d-block d-sm-none">OUR FIRST VISIT AT JOSEPHINE CHILDREN LOCATED AT.... WHICH IS THIS KILOMETERS FROM NAIROBI , IT HAS THIS NUMBER OF CHILDERN WE DIDI THIS AND THAT</p>
                        </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                        </div>

                        </section>
    <section  id='about'>
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="card">
                  <div class="card-header">
                    About GTS
                  </div>
                  <div class="card-body">
                    <p>GTS is a non-profit organization registered with the government of Kenya</p>
                    <p>Works cooperatively with the community to reach out to the less privileged, the aged and street children</p>
                    <p>Offers guidance and counseling, supports young people to overcome drug addiction and gives hope to the vulnerable</p>
                    <p>Founded in 2017 by a group of Christian students in Kirinyaga, Kenya</p>
                    <p>Forms powerful partnerships with governments, businesses, NGOs, philanthropy and civil society organizations to develop and deploy solutions for the next generation</p>
                    <p>Faith and love of God underlie every action taken by the organization</p>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="card">
                  <div class="card-header">
                    Mission
                  </div>
                  <div class="card-body">
                    <p>Reaching out to the less privileged and giving back to the community</p>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="card">
                  <div class="card-header">
                    Vision
                  </div>
                  <div class="card-body">
                    <p>To be a wellspring of hope and grace carrier for this generation and future generations</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm">
                <div class="card">
                  <div class="card-header">
                    Core Values
                  </div>
                  <div class="card-body">
                    <p>Integrity</p>
                    <p>Teamwork</p>
                    <p>Commitment</p>
                    <p>Optimism</p>
                    <p>Stewardship</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </section>
    <section  id="activities" >
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-header bg-success">
                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">MENTORSHIP</h5>
                    <p class="card-text">The program aim at providing support to the young people in the society on their growth development. To develop the capabilities and skills of youth, and strengthen youth's community involvement and participation. To stimulate the involvement of academics and intellectuals in the community.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-header bg-primary">
                    <i class="fas fa-home fa-3x"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">VISIT TO- CHILDREN’S HOME, THE AGED AND STREET CHILDREN</h5>
                    <p class="card-text">Our visit are conducted quarterly to provide support to the particulate group with supply of shelter need.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-header bg-info">
                    <i class="fas fa-city fa-3x"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">COMMUNITY DEVELOPMENT</h5>
                    <p class="card-text">Equipping our society with current information and technology to foster growth to the communities using community input and locally available resources.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-header bg-warning">
                    <i class="fas fa-users fa-3x"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Team Building</h5>
                    <p class="card-text">Helps in building relationships among team members. Exercise are designed to improve productivity by helping member communicate better.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center">
                  <div class="card-header bg-danger">
                    <i class="fas fa-user-tie fa-3x"></i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Leaders Training</h5>
                    <p class="card-text">Enhancing and nourishing leader with ethical and intergrity skills.</p>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <section id="visits">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card rotating-card">
                <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand1.jpg') }}">
                <div class="card-body">
                  <h5 class="card-title">Card 1</h5>
                  <p class="card-text">Content for card 1</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card rotating-card">
                <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand2.jpg') }}">
                <div class="card-body">
                  <h5 class="card-title">Card 2</h5>
                  <p class="card-text">Content for card 2</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card rotating-card">
                <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand3.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Content for card 3</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card rotating-card">
                  <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand4.jpg') }}">
                  <div class="card-body">
                    <h5 class="card-title">Card 4</h5>
                    <p class="card-text">Content for card 4</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="card rotating-card">
                  <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand5.jpg') }}">
                  <div class="card-body">
                    <h5 class="card-title">Card 5</h5>
                    <p class="card-text">Content for card 5</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card rotating-card">
                  <img class="card-img-top img-fluid" src="{{ asset            ('/randoms/rand6.jpg') }}">
                  <div class="card-body">
                    <h5 class="card-title">Card 6</h5>
                    <p class="card-text">Content for card 6</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card rotating-card">
                  <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand7.jpg') }}">
                  <div class="card-body">
                    <h5 class="card-title">Card 7</h5>
                    <p class="card-text">Content for card 7</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card rotating-card">
                  <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand8.jpg') }}">
                  <div class="card-body">
                    <h5 class="card-title">Card 8</h5>
                    <p class="card-text">Content for card 8</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div             class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand9.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 9</h5>
                      <p class="card-text">Content for card 9</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/images/rand10.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 10</h5>
                      <p class="card-text">Content for card 10</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/images/rand11.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 11</h5>
                      <p class="card-text">Content for card 11</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand12.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 12</h5>
                      <p class="card-text">Content for card 12</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand13.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 13</h5>
                      <p class="card-text">Content for card 13</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card rotating-card">
                    <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand14.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Card 14</h5>
                      <p class="card-text">Content for card 14</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="card rotating-card">
                        <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand15.jpg') }}">
                        <div class="card-body">
                          <h5 class="card-title">Card 15</h5>
                          <p class="card-text">Content for card 15</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card rotating-card">
                        <img class="card-img-top img-fluid" src="{{ asset('/randoms/rand16.jpg') }}">
                        <div class="card-body">
                          <h5 class="card-title">Card 16</h5>
                          <p class="card-text">Content for card 16</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>




<section id="contact">
    <div class="card">
        <div class="card-header">Contact Us</div>
        <div class="card-body">
            <form method="post" action="/contact">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</section>
</main>
<section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="social-media-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p>Copyright &copy; {{date('Y')}} QuickOffice Pointe</p>
                </div>
            </div>
        </div>
    </footer>

<script>
$(document).ready(function(){
  var cards = $('.rotating-card');
  var currentIndex = 0;
  cards.slice(3).hide(); // hide all cards except for the first 3
  setInterval(function(){
    cards.eq(currentIndex).hide();
    currentIndex = (currentIndex + 3) % cards.length;
    cards.eq(currentIndex).show();
  }, 5000); // rotate cards every 5 seconds (5000 milliseconds)
});


</script>
</section>
</body>
</html>
