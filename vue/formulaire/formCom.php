
<form class="form-group" method="post" action="">
    <table border=0>
    <tr>
        <td class="td1">Note</td>
            <td><select class="td1 form-control" name="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
        </tr>
        <tr>      
    </table>
    <div class="row">
    <div class="col-lg-12">
      <div class="star-rating">
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
      </div>
    </div>
  </div>
    <div class="col-sm-6">
        <p class = "pcom">Commentaire </p>
        <textarea class="form-control"  type="text" name="commentaire"></textarea></div>
        </br>
        <input class ='buttonCom btn btn-primary' type="submit" name="<?php echo $valider_produit; ?>" value="Valider">
        <input type="hidden" name="id_telephone" value="<?php echo $id_produit ;?>">
        <input class ='buttonCom btn btn-primary' type="submit" name="Modifier" value="Modifier">
</form>
<style>

.buttonCom
{
  margin-left: 20px;
  margin-bottom: 20px;
}
.td1 
{
    margin-top: 20px;
}
.pcom
{
    margin-bottom: 10px;
}  

.star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}

</style>
<script>
    var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
  </script>