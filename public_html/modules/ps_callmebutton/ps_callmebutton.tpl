{*
* 2017 Tecnoes.com
*
* NOTICE OF LICENSE
*
* Module developed by Tecnoes team.
* You are only allowed to use this module after getting your own free
* or paid copy at tecnoes.com website or other official affiliate sites.
* to license@prestashop.com so we can send you a copy immediately.
*
*  @author    Tecnoes <hola@tecnoes.com>
*  @copyright 2017 Tecnoes.com
*}
		<style>		
			#numtel {
				position: fixed;         
				bottom: {$widgetbottomDISTANCE}px;       
				{$alignLEFTRIGHT}: {$widgetleftrightDISTANCE}px;
				background: {$circleCOLOR};
				width: 50px;
				height: 50px;
				display: block;
				text-decoration: none;
				-webkit-border-radius: {$circleRADIUS}px;
				-moz-border-radius: {$circleRADIUS}px;
				border-radius: {$circleRADIUS}px;
				-webkit-transition: all 0.3s linear;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
				z-index: 99999;
			}
			#numtel i {
				color: {$titleCOLOR};
				margin: 0;
				position: relative;
				left: 16px;
				top: 13px;
				font-size: 24px;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
			}
			#numtel:hover, #numtel2:hover {
				background: {$circleCOLOR};
			}
			#numtel:hover i, #numtel2:hover i {
				color: {$titleCOLOR};
				top: 5px;
			}
			
			
			@media only screen and (min-width : 480px) {
				#numtel{
				  display: {$showhideMOBILE}!important;
				}
			}
			
			
			
		</style>
		<a id="numtel" href="tel:{$phoneNUMBER}"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></a>