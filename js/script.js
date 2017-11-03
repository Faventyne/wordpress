
(function($){
    console.log("Coucou");
    $('a.button').on("mouseover", function(){
        $('a.button').animate(
    			{ //list des propriétés CSS
    				"left": "200px",
    				"height": "300px"
    			},
    			{ //liste des options
    				"duration" : 500, // Durée de l"animation en millisecondes
    				"easing" : "swing", // Définit la vitesse de l"animation en fonction de sa progression http://api.jqueryui.com/easings/
    				"queue" : false, // Place ou non l"animation dans la file d"attente. Si la valeur est false, l"animation débute tout de suite. Si elle est true, elle attend que les autres animations terminent
    				"complete" : function(){ // Définit une fonction à exécuter à la fin de l"animation
    					console.log("animation finie ! ");
    				}//fin de la fonction de CALLBACK

    			}//fin des options

    		)//animate

    })
})(jQuery);
