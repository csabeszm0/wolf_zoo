<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <title>Wolf Vadaspark - Örökbefogadás</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"> 
                <img src="../img/wolf.svg" alt="">Wolf Zoo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.html">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/allataink.html">Állataink</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../php/orokbefogadas.php">Örökbefogadás</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/jegyarak.html">Jegyárak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/infok.php" tabindex="-1" aria-disabled="true">Információk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
        </header>
        <div class="container">
            <div class="row">
                <h1 class="my-4">Wolf Vadaspark - Örökbefogadás</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="text-center">Fogadj örökbe egy állatot!</h2>
                <p class="sorki p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quidem ea voluptates omnis eligendi ducimus, velit rerum consequatur et, magni tempora expedita earum? Aliquid nesciunt enim impedit eaque iure praesentium, hic quae alias dolorum, beatae, incidunt tempora soluta exercitationem sequi voluptate necessitatibus accusamus ipsum a error delectus. Eaque possimus ullam alias atque, quo dolore fugiat earum praesentium laborum sit placeat itaque incidunt. Cupiditate nostrum perspiciatis rerum maiores ex minus, suscipit fugit corrupti impedit, nihil quae facere dolorum? Perspiciatis quasi quia suscipit eos illo, laudantium eveniet, laboriosam dolore mollitia accusamus ullam nihil possimus quisquam amet in, totam saepe at omnis molestiae.</p>
                <p class="sorki p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit earum exercitationem vel minus saepe distinctio sapiente corrupti laborum animi perspiciatis officia molestiae nostrum, voluptas, accusantium aperiam consequuntur! Iste impedit porro architecto odio nisi, ullam tempora eius praesentium qui, quos sunt, obcaecati fugit repellat aliquid labore similique. Aliquid dolorem maiores sit!</p>
                <p class="sorki p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut molestiae soluta quasi impedit optio hic pariatur neque maiores amet eligendi dolores deleniti doloremque itaque sit, veritatis tempora dolorum autem. Dolorum!</p>
                <h2 class="text-center mb-3">Örökbefogadásra vár:</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="" data-bs-toggle="modal" data-bs-target="#pandaModal">
                    <div class="card">
                        <img src="../img/panda2.png" class="card-img-top" alt="Panda">
                        <div class="card-body">
                            <h5 class="card-title">Zaidi</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="../img/zsirafok.png" class="card-img-top" alt="Zsiráfok">
                        <div class="card-body">
                            <h5 class="card-title">Leon, Coco, Jasmine, Bella, Keve</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card">
                        <img src="../img/vorospanda2.png" class="card-img-top" alt="Vörös panda">
                        <div class="card-body">
                            <h5 class="card-title">Rosie</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-lg-1">
                <?php
                    require('connect.php');
                    dbcon();
                    echo"<h2>Online örökbefogadás</h2>";
                    
                    
                    if(isset($_POST['gomb']))
                    	{
                    									
                    		if (empty($_POST['nev']) || empty($_POST['telszam']) || empty($_POST['email']))
                    			{
                    				print "Nincsenek az elérhetőségek kitöltve!";
                    			}
                    			else
                    			{
                    				$query="Insert into orokbefogadas values('$_POST[nev]','$_POST[telszam]','$_POST[email]','$_POST[allatneve]','$_POST[osszeg]','$_POST[fizetes]','$_POST[megj]')";
                    				mysqli_query($con,$query);
                    				echo"<script type='text/javascript'>alert ('Sikeresen elküldte örökbefogadási igényét!');</script>";
                    			
                    			}
                    	}
                    ?>
                <form action='' method='POST' name='orokbefogadas'>
                    <table class='table'>
                        <tr>
                            <td>Név (vagy szervezet neve):</td>
                            <td><input type="text" name='nev' class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Telefonszám:</td>
                            <td><input type="number" name='telszam' class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="email" name='email' class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Állat neve:</td>
                            <td>
                                <select name="allatneve" id="allatneve" class="form-control">
                                    <option value="Zaidi">Zaidi</option>
                                    <option value="Leon">Leon</option>
                                    <option value="Coco">Coco</option>
                                    <option value="Jasmine">Jasmine</option>
                                    <option value="Bella">Bella</option>
                                    <option value="Keve">Keve</option>
                                    <option value="Rosie">Rosie</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Összeg Ft-ban:</td>
                            <td><input type="number" name='osszeg' class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Fizetési mód:</td>
                            <td><input type="radio" name='fizetes' value='csekk'> Csekk</td>
                        <tr>
                            <td></td>
                            <td><input type="radio" name='fizetes' value='átutalás'> Átutalás</td>
                        </tr>
                        <tr>
                            <td>Örökbefogadási idő:</td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Örökbefogadási idő?" id="floatingTextarea" name="megj"></textarea>
                                    <label for="floatingTextarea" class="form-control">Örökbefogadási idő?</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br><input type="submit" name="gomb" class="btn btn-primary" value="Örökbefogadási igény elküldése!"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pandaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Zaidi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../img/panda2.png" alt="Panda" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h2>Zaidi panda</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non libero consequatur, fugiat dolore voluptatum provident at. Commodi ad reiciendis quibusdam magnam illum exercitationem provident magni mollitia expedita? Culpa, autem omnis.</p>
                                    <p>Quis aliquam inventore deleniti optio iure necessitatibus molestiae, quaerat accusamus! Nulla nihil ex, doloribus aliquid in maxime iste tempore molestias tenetur minima eos amet quaerat officiis debitis tempora id voluptatibus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Bezárás</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
                    <h4>Hírlevél</h4>
                    <p>Iratkozzon fel hírlevelünkre!</p>
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" id="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2" onclick="feliratkozas();">Feliratkozom!</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
                    <h4>Elérhetőségek</h4>
                    <ul>
                        <li><img src="../img/letter.svg" alt="">Wolf Vadaspark</li>
                        <li><img src="../img/email.svg" alt="">wolf@vadaspark.hu</li>
                        <li><img src="../img/telephone.svg" alt="">+36-30-555-5555</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
                    <h4>Nyitvatartási rend</h4>
                    <p>Minden nap 10:00 - 18:00 óráig</p>
                    <p>Pénztárzárás: 17:00 órakor</p>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
                    <h4>Megközelíthetőség</h4>
                    <p>6900 Makó, Zoo utca 1.</p>
                    <p>Szeged irányából az M43-as út mentén, a város tábla előtt jobbra.</p>
                </div>
                <div class="col-12 text-center pb-3">&copy; Copyright 2022</div>
            </div>
        </footer>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            function feliratkozas(){
            let email=document.getElementById('email').value;
            if(email == ""){
              alert("A mező kitöltése kötelező!");
            }
            else {
              alert("Sikeresen feliratkozott! Köszönjük!");
            }
            
            }
        </script>
    </body>
</html>