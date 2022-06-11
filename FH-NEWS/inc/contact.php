	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style >
			.Kontakt-Style 
            { 
                margin-top: 50px;
                margin-left: 50px;
                margin-right: 50px;
                background:#808080;
                padding: 25px 15px 25px 10px;
                font: 12px Georgia, "Times New Roman", Times, serif;
                text-shadow: 1px 1px 1px black;
                border:1px solid #E4E4E4;
            }
            .Kontakt-Style h1 
            {
                font-size: 25px;
                display: block;
                margin: -10px -15px 30px -10px;
                text-align: center;
            }
            .Kontakt-Style h1>span 
            {
                display: block; 
            }
            .Kontakt-Style label 
            {
                display: block;
                margin: 0px;
            }
            .Kontakt-Style label>span 
            {
                float: left;
                width: 20%;
                text-align: right;
                padding-right: 10px;
                margin-top: 10px;
                color: #888;
            }
            .Kontakt-Style input
            {
                border: 1px solid #DADADA;
                color: #888;
                height: 30px;
                margin-bottom: 16px;
                margin-right: 6px;
                margin-top: 2px;
                outline: 0 none;
                padding: 3px 3px 3px 5px;
                width: 70%;
                font-size: 12px;
                line-height:15px;
                box-shadow: inset 0px 1px 4px #ECECEC;
                -moz-box-shadow: inset 0px 1px 4px #ECECEC;
                -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
            }
            .Kontakt-Style textarea
            {
               padding: 5px 3px 3px 5px;
           }
           .Kontakt-Style select 
           {  
            appearance:none;
            -webkit-appearance:none; 
            -moz-appearance: none;
            text-indent: 0.01px;
            text-overflow: '';
            width: 70%;
            height: 35px;
            line-height: 25px;
        }
        .Kontakt-Style textarea
        {
            height:50px;
        }
        .Kontakt-Style .button {
            background-color: #343a40;
            border: none;
            padding: 10px 25px 10px 25px;
            color: #FFF;
            box-shadow: 1px 1px 5px #B6B6B6;
            border-radius: 3px;
            text-shadow: 1px 1px 1px #9E3F3F;
            cursor: pointer;
        }
        .Kontakt-Style .button:hover {
            background: #e1e1d0;}
        </style>
    </head>
    <body>
      <section id="Kontakt">
         <div class="container">
           <form action="" method="post" class="Kontakt-Style">       
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" class="Kontakt-Style">
                        <h1> CONTECT WITH US </h1>
                        <label>
                           <span>Name :</span>
                           <input id="name" class="form-control" type="text" placeholder="Your Full Name" />
                       </label>

                       <label>
                        <span>Email :</span>
                        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
                    </label>

                    <label>
                        <span>Message :</span>
                        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
                    </label>
                    <label>
                        <span>Sex :</span><select name="selection">
                            <option value="Job Inquiry">Male</option>
                            <option value="General Question">Female</option></select>
                        </label>
                        <label>
                            <span> </span>
                            <input type="button" class="button" value="Send" />
                        </label>
                    </form>
                </div>
            </div> 
        </div>
    </section>	
</body>
</html><!-- Kontakt Section -->
<div class="container">

	