@include('admin/layouts/layout')
<title>Contact V7</title>
	<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<style>
		.styled {
			border: 0;
			line-height: 2.5;
			padding: 0 20px;
			font-size: 2rem;
			text-align: center;
			color: #fff;
			float: right;
			margin-right: 130px;
			margin-top: 10px;
			text-shadow: 1px 1px 1px #000;
			border-radius: 10px;
			background-color: #005a57;
			background-image: linear-gradient(to top left,
											  rgba(0, 0, 0, .2),
											  rgba(0, 0, 0, .2) 30%,
											  rgba(0, 0, 0, 0));
			box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
						inset -2px -2px 3px rgba(0, 0, 0, .6);
		}

		.styled:hover {
			background-color: #428bca;
		}

		.styled:active {
			box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
						inset 2px 2px 3px rgba(0, 0, 0, .6);
		}
.wrap-contact100 {
    width: 1060px;
    background: #e6e6e6;
	height: 550px;
}
.contact100-form {
    width: 100%;
}
.contact100-form-title {
    display: block;
    font-family: Oswald-Medium;
    font-size: 30px;
    color: #43383e;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 35px;
}
.wrap-input100 {
    width: 50%;
    position: relative;
    background-color: #fff;
    margin-bottom: 17px;
    margin-left: 250px;
}
.wrap-select100 {
    width: 50%;
    position: relative;
    background-color: #fff;
    margin-bottom: 17px;
    margin-left: 250px;
}
.validate-input {
    position: relative;
}
.validate-select {
    position: relative;
}
input.input100 {
    height: 62px;
    padding: 0 20px 0 58px;
}
select.select100 {
    height: 62px;
    padding: 0 20px 0 58px;
}
textarea.input100 {
    min-height: 199px;
    padding: 19px 20px 0 23px;
}
textarea.select100 {
    min-height: 199px;
    padding: 19px 20px 0 23px;
}
.label-input100 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 58px;
    height: 62px;
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
    font-size: 18px;
    color: #999999;
}
.select-select100 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 58px;
    height: 62px;
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
    font-size: 18px;
    color: #999999;
}
.input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: Oswald-Medium;
    font-size: 15px;
    color: #43383e;
    line-height: 1.2;
    padding: 0 5px;
}
.select100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: Oswald-Medium;
    font-size: 15px;
    color: #43383e;
    line-height: 1.2;
    padding: 0 5px;
}
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="wrap-contact100">
<form action="{{ route('clients.store') }}" method="POST" name="add_client" class="contact100-form validate-form">
    {{ csrf_field() }}
    <span class="contact100-form-title">
            <b>Ajouter un client</b>
        </span>
    <div class="wrap-input100 validate-input" >
                <input class="input100" type="text" name="fullname"  placeholder="Enter le nom">
                <label class="label-input100" for="fullname">
						<span class="fa fa-edit"></span>
					</label>
        </div>
    <div class="wrap-input100 validate-input" >
        <input type="text" name="email" placeholder="Example@gamil.com" class="input100">
     <label class="label-input100" for="email">
            <span class="fa fa-envelope"></span>
        </label>
    </div>
    <div class="wrap-input100 validate-input">
        <input type="text" name="gendre"  placeholder="Enter le genre" class="input100">
        <label class="label-input100" for="gendre">
                <span class="fa fa-male"></span>
            </label>
       </div>
    <div class="wrap-input100 validate-input">
       <input type="text" name="age"  placeholder="Enter l'Age" class="input100">
       <label class="label-input100" for="age">
            <span class="fa fa-calendar"></span>
        </label>
    </div>
    <div class="wrap-input100 validate-input">
            <label class="label-input100" for="age">
         <span class="fa fa-users"></span>
        </label>
        <select name="groupe" class="select100" placeholder="choisir le groupe">

            <option>g1</option>
            <option>g2</option>

        </select>

       
    </div>

        <div class="col-md-12">
    <button type="submit" class="favorite styled">Ajouter</button>
        </div>
    </div>

</form>
</div>
@include('admin/layouts/nav')

