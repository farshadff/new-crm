<?php
/**
 * Created by PhpStorm.
 * User: farshad
 * Date: 5/23/2018
 * Time: 12:26 AM
 */
?>

@include('header');
@include('sidebar');
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Horizontal borders -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">اضافه کردن محصول</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

                <form method="post" action="{{url('admin/invoices')}}">
                    {{csrf_field()}}
                    <div class="form-group"> <!-- Street 1 -->
                        <label for="title" class="control-label">نام</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Street address, P.O. box, company name, c/o">
                    </div>
                    <div id="InputsWrapper">
                        <div><select class="select-custom-colors select2-hidden-accessible" name="client_id"
                                     tabindex="-1" aria-hidden="true"></select>
                                <a href="#" class="removeclass"></a></div>
                    </div>
                    <div id="AddMoreFileId">
                        <a href="#" id="AddMoreFileBox" class="btn btn-info">اضافه کردن فیلد</a><br><br>
                    </div>
                    <div class="form-group">
                        <label>انتخاب مشتری</label>
                        <select multiple="" class="select-menu2-color select2-hidden-accessible" name="product_id"
                                tabindex="-1"
                                aria-hidden="true">
                            @foreach($produts as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="display-block">انتخاب مشتری</label>
                        <select class="select-custom-colors select2-hidden-accessible" name="client_id" tabindex="-1"
                                aria-hidden="true">
                            @foreach($clients as $client)
                                <option value="{{$client->id}}">{{$client->title}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="form-group"> <!-- Full Name -->
                        <label for="description" class="control-label">توضیحات</label>
                        <input type="text" class="form-control" id="description" name="description"
                               placeholder="John Deer">
                    </div>
                    <button type="submit" class="btn btn-primary btn-raised legitRipple">ارسال</button>
                </form>
            </div>
            @if ($errors->any())
                <div class="panel panel-flat bg-warning">
                    <div class="panel-heading">
                        <h5 class="panel-title">لطفا خطاهای زیر را بررسی کنید</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">

                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif


        </div>
    </div>
</div>
{{-- adding field script--}}
<script>
    $(document).ready(function () {

        var MaxInputs = 10; //maximum extra input boxes allowed
        var InputsWrapper = $("#InputsWrapper"); //Input boxes wrapper ID
        var AddButton = $("#AddMoreFileBox"); //Add button ID

        var x = InputsWrapper.length; //initlal text box count
        var FieldCount = 1; //to keep track of text box added

//on add input button click
        $(AddButton).click(function (e) {
            //max input box allowed
            if (x <= MaxInputs) {
                FieldCount++; //text box added ncrement
                //add input box
                $(InputsWrapper).append('<div><select  name="mytext[]" id="field_' + FieldCount + '"/></select> <a href="#" class="removeclass">حذف</a></div>');
                x++; //text box increment

                $("#AddMoreFileId").show();

                $('AddMoreFileBox').html("Add field");

                // Delete the "add"-link if there is 3 fields.
                if (x == 10) {
                    $("#AddMoreFileId").hide();
                    $("#lineBreak").html("<br>");
                }
            }
            return false;
        });

        $("body").on("click", ".removeclass", function (e) { //user click on remove text
            if (x > 1) {
                $(this).parent('div').remove(); //remove text box
                x--; //decrement textbox

                $("#AddMoreFileId").show();

                $("#lineBreak").html("");

                // Adds the "add" link again when a field is removed.
                $('AddMoreFileBox').html("Add field");
            }
            return false;
        })

    });
</script>

@include('footer');
