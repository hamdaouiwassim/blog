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
			margin-right: 130px;
			margin-top: 20px;
			float: right;
			text-align: center;
			color: #fff;
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
.validate-input {
    position: relative;
}
input.input100 {
    height: 62px;
    padding: 0 20px 0 58px;
}

textarea.input100 {
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
</style>
<div class="wrap-contact100">
			
 <span class="contact100-form-title">
					<b>Envoyer une charte</b>
				</span>
				<form action="/mail/send" method="post">
				@Csrf
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<select class="input100" id="name"  name="chart" >
					@foreach ($chartes as $chart)
						<option value="{{ $chart->id }}" >{{ $chart->name }}</option>
					@endforeach
					</select>
					
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<select class="input100" id="name"  name="groupe" >
					@foreach ($groupes as $groupe)
						<option value="{{ $groupe->id }}" >{{ $groupe->name }}</option>
					@endforeach
					</select>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100" name="message" placeholder="Your message..."></textarea>
				</div>

				<input class="favorite styled" type="submit" value="Envoyer">
			</form>
		</div>


@include('admin/layouts/nav')