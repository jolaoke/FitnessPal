<?php
    if($user['gender']=="Male"){
        $bmr=round(5+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
    }
    elseif($user['gender']=="Female"){
        $bmr=round(161+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
    }
    if($user['activity']=="little"){
        $calories_needed=round($bmr*1.2,0);
    }
    elseif($user['activity']=="light"){
        $calories_needed=round($bmr*1.375,0);
    }
    elseif($user['activity']=="moderate"){
        $calories_needed=round($bmr*1.55,0);
    }
    elseif($user['activity']=="very"){
        $calories_needed=round($bmr*1.725,0);
    }
    elseif($user['activity']=="extra"){
        $calories_needed=round($bmr*1.9,0);
    }
?>
<h3>You need:</h3>
<h1 class="text-center" style="font-size:20em;"><?php echo $calories_needed;?><span style="font-size:30pt;">calories/day</span></h1>
<p class="lead">This means that, with your current level of activty and your BMR, you need to take in about <span style="font-weight:bold;color:green;"><?php echo $calories_needed; ?></span> calories per day.</p>
<p class="lead">If you take in fewer calories, you will end up losing weight. If you take in more calories, you will end up gaining weight.</p>
<!-- START area where lists of foods and their calorie contents are given -->
<div class="panel-group col-md-8 col-md-offset-2" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="text-danger"><center>Foods With High Calorie Content</center></span>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <!-- START High Calorie Foods Table --><table class="table" id="cal">
                    <thead>
                        <tr>
                            <td><strong>Food</strong></td>
                            <td></td>
                            <td><strong>Size/Quantity</strong></td>
                            <td><strong>Calorie Content</strong></td>
                        </tr>
                    </thead>
                    <tr>
                        <td><img src="images/high_cal_foods/peanut_butter.jpg" alt="Peanut Butter" /></td>
                        <td>Peanut Butter</td>
                        <td>100 grams</td>
                        <td>589</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/chocolate.jpg" alt="Chocolate" /></td>
                        <td>Chocolate</td>
                        <td>100 grams</td>
                        <td>535</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/cheese.jpg" alt="Cheese" /></td>
                        <td>Cheese</td>
                        <td>100 grams</td>
                        <td>353</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/granola.jpg" alt="Granola" /></td>
                        <td>Granola</td>
                        <td>1 cup</td>
                        <td>597</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/pasta.jpg" alt="Pasta" /></td>
                        <td>Pasta</td>
                        <td>100 grams</td>
                        <td>158</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/chocolate_nut_spread.jpg" alt="Chocolate Nut Spread" /></td>
                        <td>Chocolate Nut Spread</td>
                        <td>100 grams</td>
                        <td>528</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/salad_dressing.jpg" alt="Salad Dressing" /></td>
                        <td>Salad Dressing</td>
                        <td>100 grams</td>
                        <td>387</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/nuts.jpg" alt="Nuts" /></td>
                        <td>Nuts</td>
                        <td>100 grams</td>
                        <td>576</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/olive_oil.jpg" alt="Olive Oil" /></td>
                        <td>Olive Oil</td>
                        <td>Tablespoon</td>
                        <td>119</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/lard.jpg" alt="Lard" /></td>
                        <td>Lard</td>
                        <td>100 grams</td>
                        <td>102</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/bacon.jpg" alt="Bacon" /></td>
                        <td>Bacon</td>
                        <td>100 grams</td>
                        <td>548</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/salmon.jpg" alt="Salmon" /></td>
                        <td>Salmon</td>
                        <td>100 grams</td>
                        <td>208</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/beef.jpg" alt="Beef" /></td>
                        <td>Beef</td>
                        <td>100 grams</td>
                        <td>332</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/sausage.jpg" alt="Sausages" /></td>
                        <td>Sausages</td>
                        <td>100 grams</td>
                        <td>297</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/brown_rice.jpg" alt="Brown Rice" /></td>
                        <td>Brown Rice</td>
                        <td>100 grams</td>
                        <td>111</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/potato_salad.jpg" alt="Potato Salad" /></td>
                        <td>Potato Salad</td>
                        <td>100 grams</td>
                        <td>143</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/dates.jpg" alt="Dates" /></td>
                        <td>Dates</td>
                        <td>100 grams</td>
                        <td>282</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/avocados.jpg" alt="Avocados" /></td>
                        <td>Avocados</td>
                        <td>Medium-sized</td>
                        <td>164</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/bananas.jpg" alt="Bananas" /></td>
                        <td>Bananas</td>
                        <td>Large-sized</td>
                        <td>121</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/mangoes.jpg" alt="Mangoes" /></td>
                        <td>Mangoes</td>
                        <td>Medium-sized</td>
                        <td>130</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/corn.jpg" alt="Corn" /></td>
                        <td>Corn</td>
                        <td>1 cup</td>
                        <td>132</td>
                    </tr>
                    <tr>
                        <td><img src="images/high_cal_foods/whole_grain_bread.jpg" alt="Whole Grain Bread" /></td>
                        <td>Whole Grain Bread</td>
                        <td>1 slice</td>
                        <td>78</td>
                    </tr>
                    <!-- END High Calorie Foods Table-->
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span class="text-info"><center>Foods With Low Calorie Content</center></span>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <!-- START Low Calorie Foods Table --><table class="table" id="cal">
                    <thead>
                        <tr>
                            <td><strong>Food</strong></td>
                            <td></td>
                            <td><strong>Size/Quantity</strong></td>
                            <td><strong>Calorie Content</strong></td>
                        </tr>
                    </thead>
                    <tr>
                        <td><img src="images/low_cal_foods/celery.jpg" alt="Celery" /></td>
                        <td>Celery</td>
                        <td>100 grams</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/oranges.jpg" alt="Oranges" /></td>
                        <td>Oranges</td>
                        <td>100 grams</td>
                        <td>47</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/cabbage.jpg" alt="Cabbage" /></td>
                        <td>Cabbage</td>
                        <td>100 grams</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/asparagus.jpg" alt="Asparagus" /></td>
                        <td>Asparagus</td>
                        <td>100 grams</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/beets.jpg" alt="Beets" /></td>
                        <td>Beets</td>
                        <td>100 grams</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/cucumber.jpg" alt="Cucumber" /></td>
                        <td>Cucumber</td>
                        <td>100 grams</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/lemon.jpg" alt="Lemon" /></td>
                        <td>Lemon</td>
                        <td>100 grams</td>
                        <td>29</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/cauliflower.jpg" alt="Cauliflower" /></td>
                        <td>Cauliflower</td>
                        <td>100 grams</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/mushrooms.jpg" alt="Mushrooms" /></td>
                        <td>Mushrooms</td>
                        <td>100 grams</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/watermelon.jpg" alt="Watermelon" /></td>
                        <td>Watermelon</td>
                        <td>100 grams</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/zucchini.jpg" alt="Zucchini" /></td>
                        <td>Zucchini</td>
                        <td>100 grams</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/tomatoes.jpg" alt="Tomatoes" /></td>
                        <td>Tomatoes</td>
                        <td>100 grams</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/grapefruit.jpg" alt="Grapefruit" /></td>
                        <td>Grapefruit</td>
                        <td>100 grams</td>
                        <td>42</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/brussels_sprouts.jpg" alt="Brussels Sprouts" /></td>
                        <td>Brussels Sprouts</td>
                        <td>100 grams</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/kale.jpg" alt="Kale" /></td>
                        <td>Kale</td>
                        <td>100 grams</td>
                        <td>49</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/turnips.jpg" alt="Turnips" /></td>
                        <td>Turnips</td>
                        <td>100 grams</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/apples.jpg" alt="Apples" /></td>
                        <td>Apples</td>
                        <td>100 grams</td>
                        <td>52</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/carrots.jpg" alt="Carrots" /></td>
                        <td>Carrots</td>
                        <td>100 grams</td>
                        <td>41</td>
                    </tr>
                    <tr>
                        <td><img src="images/low_cal_foods/broccoli.jpg" alt="Broccoli" /></td>
                        <td>Broccoli</td>
                        <td>100 grams</td>
                        <td>34</td>
                    </tr>
                <!-- END Low Calorie Foods Table --></table>
            </div>
        </div>
    </div>
</div>