<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giveaway</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="main-center">
            <div class="text-center">
                <h2>Give Moose your info!</h2>
                <p>Fill out the form below to get your print.</p>
                <p>&nbsp;</p>
            </div>
            <form id="prizeForm" class="" method="post" action="#">
                <div class="form-group">
                    <label for="fName" class="cols-sm-2 control-label">First Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="fName" id="fName"  placeholder="Enter your first name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lName" class="cols-sm-2 control-label">Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="lName" id="lName"  placeholder="Enter your last name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="addr1" class="cols-sm-2 control-label">Address</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <textarea class="form-control" rows="2" id="address" name="address" placeholder="Enter your address"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="cols-sm-2 control-label">Country</label>
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="changeCountry(this);">Canada</a></li>
                                <li><a href="#" onclick="changeCountry(this);">U.S.A.</a></li>
                                <li><a href="#" onclick="changeCountry(this);">Other</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter your country"/>
                    </div><!-- /input-group -->
                </div>

                <div class="form-group">
                    <label for="province" class="cols-sm-2 control-label">State/Province</label>
                    <div class="input-group">
                        <div class="input-group-btn" id="province-canada" style="display:none;">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="changeProvince(this);">British Columbia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Alberta</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Saskatchewan</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Manitoba</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Ontario</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Quebec</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Newfoundland</a></li>
                                <li><a href="#" onclick="changeProvince(this);">New Brunswick</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Nova Scotia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">P.E.I.</a></li>
                                <li><a href="#" onclick="changeProvince(this);">YK</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Nunavut</a></li>
                                <li><a href="#" onclick="changeProvince(this);">NW Territories</a></li>
                                <li><a href="#" onclick="changeProvince(this);"></a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="input-group-btn" id="state-usa" style="display:none;">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="changeProvince(this);">Alaska</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Alabama</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Arkansas</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Arizona</a></li>
                                <li><a href="#" onclick="changeProvince(this);">California</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Colorado</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Connecticut</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Delaware</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Florida</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Georgia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Hawaii</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Iowa</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Idaho</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Illinois</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Indiana</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Kansas</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Kentucky</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Louisiana</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Massachusetts</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Maryland</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Maine</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Michigan</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Minnesota</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Missouri</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Mississippi</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Montana</a></li>
                                <li><a href="#" onclick="changeProvince(this);">North Carolina</a></li>
                                <li><a href="#" onclick="changeProvince(this);">North Dakota</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Nebraska</a></li>
                                <li><a href="#" onclick="changeProvince(this);">New Hampshire</a></li>
                                <li><a href="#" onclick="changeProvince(this);">New Jersey</a></li>
                                <li><a href="#" onclick="changeProvince(this);">New Mexico</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Nevada</a></li>
                                <li><a href="#" onclick="changeProvince(this);">New York</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Ohio</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Oklahoma</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Oregon</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Pennsylvania</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Rhode Island</a></li>
                                <li><a href="#" onclick="changeProvince(this);">South Carolina</a></li>
                                <li><a href="#" onclick="changeProvince(this);">South Dakota</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Tennessee</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Texas</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Utah</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Virginia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Vermont</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Washington</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Wisconsin</a></li>
                                <li><a href="#" onclick="changeProvince(this);">West Virginia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Wyoming</a></li>
                                <li><a href="#" onclick="changeProvince(this);">American Samoa</a></li>
                                <li><a href="#" onclick="changeProvince(this);">District of Columbia</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Guam</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Mariana Islands</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Puerto Rico</a></li>
                                <li><a href="#" onclick="changeProvince(this);">Virgin Islands</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <input type="text" class="form-control" name="province" id="province" placeholder="Enter your state/province"/>
                    </div><!-- /input-group -->
                </div>

                <div class="form-group">
                    <label for="city" class="cols-sm-2 control-label">City</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="city" id="city"  placeholder="Enter your city"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="zip" class="cols-sm-2 control-label">Zip/Postal Code</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="zip" id="zip"  placeholder="Enter your zip/postal code"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="cols-sm-2 control-label">Select your prizes</label>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <a href="#" data-toggle="modal" data-target="#prizeSelect" onclick="selectPrize(1)" class="thumbnail prize-select">
                            <img id="prize1" src="images/postcard.jpg" alt="Click to select a postcard" class="img-responsive"  data-toggle="tooltip" title="Click to select a postcard">
                            <div class="text-center">Postcard</div>
                            <div id="prizeCustomName1" class="text-center"></div>
                            <input name="customName1" id="customName1" type="hidden" value=""/>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" data-toggle="modal" data-target="#prizeSelect" onclick="selectPrize(2)" class="thumbnail prize-select">
                            <img id="prize2" src="images/postcard.jpg" alt="Click to select a postcard" class="img-responsive"  data-toggle="tooltip" title="Click to select a postcard">
                            <div class="text-center">Postcard</div>
                            <div id="prizeCustomName2" class="text-center"></div>
                            <input name="customName2" id="customName2" type="hidden" value=""/>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" data-toggle="modal" data-target="#prizeSelect" onclick="selectPrize(3);" class="thumbnail prize-select">
                            <img id="prize3" src="images/poster.jpg" alt="Click to select a poster" class="img-responsive"  data-toggle="tooltip" title="Click to select a poster">
                            <div class="text-center">Poster</div>
                            <div id="prizeCustomName3" class="text-center"></div>
                            <input name="customName3" id="customName3" type="hidden" value=""/>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#prizeSelect" onclick="selectPrize(4);" class="thumbnail prize-select">
                            <img id="prize4" src="images/print.jpg" alt="Click to select a print" class="img-responsive"  data-toggle="tooltip" title="Click to select a print">
                            <div class="text-center">Print</div>
                            <div id="prizeCustomName4" class="text-center"></div>
                            <input name="customName4" id="customName4" type="hidden" value=""/>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#prizeSelect" onclick="selectPrize(5);" class="thumbnail prize-select">
                            <img id="prize5" src="images/print.jpg" alt="Click to select a print" class="img-responsive"  data-toggle="tooltip" title="Click to select a print">
                            <div class="text-center">Print</div>
                            <div id="prizeCustomName5" class="text-center"></div>
                            <input name="customName5" id="customName4" type="hidden" value=""/>
                        </a>
                    </div>
                </div>

                <div class="form-group ">
                    <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="prizeSelect">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">Select a character from below</h3>

                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <div class="input-group-addon">Signed to:</div>
                        <input id="customName" name="customName" type="text" placeholder="If Left Blank Will Sign to First Name Provided" class="form-control">
                    </div>
                </form>

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input id="prizeSearch" type="text" placeholder="Find a character" class="form-control">
                    </div>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger"><span aria-hidden="true">&times;</span></button>
                </form>
            </div>
            <div class="modal-body">
                <div id="prizeCharacters" class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="The Fantastic Four - Sue Storm">
                        <a href="#" class="thumbnail" onclick="changePrize(1)">
                            <img src="images/characters/1.jpg" alt="Click to select a postcard" class="img-responsive">
                            <img src="images/new.png" class="img-responsive img-new">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Batman - Joker">
                        <a href="#" class="thumbnail" onclick="changePrize(2)">
                            <img src="images/characters/2.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Batman - Harley Quinn">
                        <a href="#" class="thumbnail" onclick="changePrize(3)">
                            <img src="images/characters/3.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Mortal Kombat - Mileena">
                        <a href="#" class="thumbnail" onclick="changePrize(4)">
                            <img src="images/characters/4.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="The Flash">
                        <a href="#" class="thumbnail" onclick="changePrize(5)">
                            <img src="images/characters/5.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Sheik">
                        <a href="#" class="thumbnail" onclick="changePrize(6)">
                            <img src="images/characters/6.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Power Girl">
                        <a href="#" class="thumbnail" onclick="changePrize(7)">
                            <img src="images/characters/7.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="X-men - Jean Grey">
                        <a href="#" class="thumbnail" onclick="changePrize(8)">
                            <img src="images/characters/8.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="The Fantastic Four - Sue Storm">
                        <a href="#" class="thumbnail" onclick="changePrize(1)">
                            <img src="images/characters/1.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Batman - Joker">
                        <a href="#" class="thumbnail" onclick="changePrize(2)">
                            <img src="images/characters/2.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Batman - Harley Quinn">
                        <a href="#" class="thumbnail" onclick="changePrize(3)">
                            <img src="images/characters/3.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Mortal Kombat - Mileena">
                        <a href="#" class="thumbnail" onclick="changePrize(4)">
                            <img src="images/characters/4.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="The Flash">
                        <a href="#" class="thumbnail" onclick="changePrize(5)">
                            <img src="images/characters/5.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Sheik">
                        <a href="#" class="thumbnail" onclick="changePrize(6)">
                            <img src="images/characters/6.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="Power Girl">
                        <a href="#" class="thumbnail" onclick="changePrize(7)">
                            <img src="images/characters/7.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb" data-search="X-men - Jean Grey">
                        <a href="#" class="thumbnail" onclick="changePrize(8)">
                            <img src="images/characters/8.jpg" alt="Click to select a postcard" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var selected = 0;
    var $search = $('#prizeSearch');
    var $country = $('#country');
    var $province = $('#province');
    var $customName = $('#customName');

    function selectPrize(sel) {
        selected = sel;
        $customName.val($('#customName' + selected).val());
    }

    function changePrize(character) {
        var customName = $customName.val();
        if(customName != '')
            customName = '"' + customName + '"';

        $('#prize' + selected).attr('src', 'images/characters/' + character + '.jpg');
        $('#prizeCustomName' + selected).text(customName);

        $('#customName' + selected).val($customName.val());

        $('#prizeSelect').modal('hide');
    }

    function changeCountry(e) {
        var country = $(e).text()
        hideProvince();
        if (country == 'Other') {
            $country.val('');
        }else {
            $country.val(country);
            $province.val('');
            if(country == 'Canada') {
                $('#province-canada').show();
            }else if (country == 'U.S.A.') {
                $('#state-usa').show();
            }
        }
    }
    
    function hideProvince() {
        $('#province-canada').hide();
        $('#state-usa').hide();
    }

    function changeProvince(province) {
        $province.val($(province).text());
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();

        $country.keyup(function () {
            hideProvince();
        });

        $search.keyup(function () {
            if($search.val().length > 2) {
                $('#prizeCharacters').children().each(function () {
                    if($(this).attr('data-search').match(new RegExp($search.val(), "i")) == null) {
                        $(this).fadeOut("fast");
                    }
                });
            }else {
                $('#prizeCharacters').children().each(function () {
                    $(this).fadeIn("fast");
                });
            }

        });
    })
</script>

</body>
</html>