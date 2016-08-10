<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="wide">
            <header>
		<?php get_header()?>
            </header>



        </div>

	<div class="row">
                <div class="card-deck-wrapper">
                    <div class="card-deck">

			<?php while (have_posts()): the_post()?>
			
				<div class="card col-sm-4">

                            <div class="card-block">
                                <h4 class="card-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                                <p class="card-text"><?php the_content(__('Continue reading'));?></p>

                            </div>
                        </div>
                    	<?php endwhile;?>



			</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Content-->

<footer class="footer">
    <div class="container">
        <p class="text-muted">&copy; Kim Heyse Erasmus Hogeschool Brussel</p>
    </div>
</footer>
<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>

</html>