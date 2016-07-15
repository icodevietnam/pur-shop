<?php
/*
	Template Name: Contact
*/
	if(have_post()) : while ( have_post()) : the_post() 
		the_content();
		end_while;
		end_if;