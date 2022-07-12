@extends('layouts.default')
@section('content')
		    <div class="object-cs">
			    <div class="object-rope"></div>
			    <div class="object-shape">
			        <span class="soon"/>
			    </div>
			</div>
			<div class="cover">
			    <div class="logo">
			        <img class="logo" src="{{ URL::asset('image/logo.png')}}">
			         <p class="text">
			          The website is a student project I'm continously working in order to update all the required content. Bare with me the page will be available soon
			        </p>
			        <a class="btn btn-info px-5 btn-block" href="/">Go Back</a>
			    </div>
			</div>
			<style type="text/css">
								/**
				 * GlobalShell.css
				 * =====================
				 *
				 * Motto: "Simplicity Simply Simplified"
				 *
				 * Custom version of shell, under construction single page.
				 *
				 * @author      Current authors: Alain van Hall <alain@sourjelly.net>
				 *
				 * @license     Code and contributions have 'MIT License'
				 *              More details: https://github.com/[invullen]/LICENSE.txt
				 *
				 * @version     1.1 custom
				 *    
				 *
				 */

				 /**************************************************************
									shell front
				**************************************************************/
				html, body, div, span, applet, object, iframe,
				h1, h2, h3, h4, h5, h6, p, blockquote, pre,
				a, abbr, acronym, address, big, cite, code,
				del, dfn, em, img, ins, kbd, q, s, samp,
				small, strike, strong, sub, sup, tt, var,
				b, u, i, center,
				dl, dt, dd, ol, ul, li,
				fieldset, form, label, legend,
				table, caption, tbody, tfoot, thead, tr, th, td,
				article, aside, canvas, details, embed, 
				figure, figcaption, footer, header, hgroup, 
				menu, nav, output, ruby, section, summary,
				time, mark, audio, video {
					margin        	: 0;
					padding       	: 0;
					border        	: 0;
					font-size     	: 100%;
					font-weight   	: 300;
					font          	: inherit;
					vertical-align	: baseline;
					color 		  	: rgba(61,61,61,0.65);
					font-family   	: sans-serif;
					text-decoration	: none;
					/*text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.76);*/
				}
				textarea,
				input{
					margin:0;
					padding:0;
					background: transparent;
				}
				form{
					width:97.8%;
					height:100%;
					position: absolute;
				}

				$bckg-img:url('http://via.placeholder.com/130x130');
				 /**************************************************************
									disable browser styling
				**************************************************************/
				input{
					outline: none;
					/* move this to GlobalzIndex.css */
					/*	z-index: 90000;*/
				}
				input:focus,
				select:focus,
				textarea:focus,
				button:focus {
				    outline: none;
				}
				input.middle:focus {
				    outline-width: 0;
				}
				[contenteditable="true"]:focus {
				    outline: none;
				}
				*:focus {
				    outline: none;
				}
				html,body{
					width:100%;
					height:100%;
				}

				/**************************************************************
									General classes
				**************************************************************/
				.clear{
					clear:both;
				}
				.hide{
					display:none;
				}
				.left{
					left:0;
				}
				.right{
					right:0;
				}
				a.item,
				.display-block{
					display: block;
				}
				.display-inline-block{
					display: inline-block;
				}
				ul.tabbable li.active {
					font-weight: bold;
				}
				ul.scrollable,
				div.scrollable{
					overflow: scroll;
				}
				.noselect{
					-webkit-touch-callout: none;
					-webkit-user-select  : none;
					-khtml-user-select   : none;
					-moz-user-select     : none;
					-ms-user-select      : none;
					user-select          : none;
				}

				/**************************************************************
									button design
				**************************************************************/
				button{
					padding              : 10px 15px;
					border               : 1px solid rgba(61,61,61,0.25);
					background-color     : inherit;
				  &:hover{// 1 simple rule, all '&' statments directly under attributes of parent.    
					   border-color: rgba(255,110,0,1);
						 color: rgba(255,110,0,1);
				  }
				  .inverted-button{
				    padding              : 10px 15px;
				    border               : 1px solid rgba(255,255,255,1);
				    background-color     : inherit;
				    color                : rgba(255,255,255,1);
				  }
				  .small-button{
				    padding:5px 10px!important;
				  }
				  .btn-actionfield{
				    width      : 40%;
				    height     : 97%;
				    border     : 0;
				    right      : 0;
				    border-left: 1px solid rgba(61,61,61,0.25);
				  }
				}

				/*
				 * headings
				 */
				h{
				  &1{font-size: 5em;}
				  &2{font-size: 3em;}
				  &3{font-size: 2em;}
				  &1,&2,&3{
				    	padding:2.5% 0;
				  }
				}
				p{
					line-height: 1.4em;
				}

				/**************************************************************
									Theme design
				**************************************************************/
				//imported here so you can see where it is implemented
				@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,300,500);

				div.cover {
				  font-family: 'Ubuntu', sans-serif;
				  font-weight:300;
				  line-height: 150%;
				  overflow: hidden;
				  position: fixed;
				  width: 100%;
				  height: 100%;
				  margin: 0px;
				  padding: 0px;
				  z-index: 999;
				  overflow: visible !important;
				  // background-image: $bckg-img;
				  background-repeat: no-repeat;
				  background-position: center;
				  div.logo {
				    position: absolute;
				    margin: auto;
				    color: #231F20;
				    width: 50%;
				    height: 40%;
				    top: 0px;
				    right: 0px;
				    bottom: 0px;
				    left: 0px;
				    text-align: center;
				    // border-radius:1000px;
				    button{
				      cursor: pointer;
				      -webkit-transition: all 250ms cubic-bezier(0.42, 0, 0.58, 1);
				      -moz-transition: all 250ms cubic-bezier(0.42, 0, 0.58, 1);
				      -o-transition: all 250ms cubic-bezier(0.42, 0, 0.58, 1);
				      transition: all 250ms cubic-bezier(0.42, 0, 0.58, 1);
				      .btn{
				        border: solid 1px;
				        width: auto;
				        height: 40px;
				        display: inline-block;
				        padding: 10px 20px;
				        border-radius: 30px;
				        -moz-border-radius: 30px;
				        -webkit-border-radius: 30px;
				        border-color: #8c8c8c;
				        &:hover {
				          border-color: #8c8c8c;
				        }
				      }
				    }
				    img.logo,
				    p.text {
				      padding: 30px 20px;
				    }
				    img.logo {
				      width: 130px;
				      height: 130px;
				      transition-duration: 500ms;
				      cursor: pointer;
				      // border-radius:10000px;
				      &:hover {
				        -ms-transform: scale(1.1, 1.1);
				        /* IE 9 */
				        -webkit-transform: scale(1.1, 1.1);
				        /* Safari */
				        transform: scale(1.1, 1.1);
				      }
				    }
				  }
				}
				@keyframes sway {
				  0% {
				    transform: rotate(8deg);
				  }
				  50% {
				    transform: rotate(-8deg);
				  }
				  100% {
				    transform: rotate(8deg);
				  }
				}
				.object-cs {
				  position: absolute;
				  animation: sway 2.4s infinite;
				  animation-timing-function: ease-in-out;
				  -webkit-transform-origin: top;
				  -moz-transform-origin: top;
				  transform-origin: top;
				  left: 0;
				  right: 0;
				  height: 5%;
				  z-index: 999;
				  text-transform: uppercase;
				  .object-{
				    &rope{
				      height: 100%;
				      width: 5px;
				      background-color: #222222;
				      content: "";
				      display: block;
				      margin-left: 50%;
				    }
				    &shape{
				      width: 100px;
				      height: 100px;
				      border-radius: 50%;
				      display: block;
				      background-color: #222222;
				      margin: 0 auto;
				      position: relative;
				      color: #fff;
				      text-align: center;
				      padding-top: 25px;
				      font-weight: 800;
				      -webkit-box-sizing: border-box;
				      -moz-box-sizing: border-box;
				      box-sizing: border-box;
				      &:before{
				        content:'coming soon';
				      }
				      span {
				        font-size: 22px;
				        color:white;
				      }
				    }
				  }
				}
				@media (orientation: portrait) {
				  img.logo {
				    width: 100% !important;
				    height: auto !important;
				  }
				}
				@media all and (orientation: portrait) {
				  img.logo {
				    width: 100%;
				    height: auto;
				  }
				}
				@media only screen and (max-width: 1400px) {
				  body {
				  	background-size: 200%;
				    font-size: 100%;
				  }
				}
				@media only screen and (max-width: 650px) {
				  body {
				    font-size: 80%;
				    background-size: 230%;
				    background-position: center;
				    background-repeat: no-repeat;
				  }
				  #cover div#logo .text {
				    padding: 30px 0px;
				  }
				}
			</style>
@stop