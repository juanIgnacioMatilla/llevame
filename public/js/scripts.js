window.addEventListener('load',function () {

	var llevarButton = document.querySelector('#llevarButton');
	var llevameButton = document.querySelector('#llevameButton');

	var divLlevame = document.querySelector('.llevame-section');
	var divLlevar = document.querySelector('#llevar-section');
	var buscador = document.querySelector('.buscar-web');
	var formPostear = document.querySelector('#llevar-section');

	if(document.querySelector('div.container-misViajes-Mobile')){
		getMyTrips();
	}



	if (divLlevar) {
		

		getTrips();
		getMyTrips();

		prepareQuery();
		

		formPostear.addEventListener('submit',function (event) {

			var toValue = formPostear.elements[0].value;
			var fromValue = formPostear.elements[1].value;
			var timeValue = formPostear.elements[2].value;
			var dateValue = formPostear.elements[3].value;
			var passengersValue = formPostear.elements[4].value;
			var priceValue = formPostear.elements[5].value;
			var userIdValue = document.querySelector('#user-id').value;



			event.preventDefault();
			
			axios.post('/api/insert', {
		   		to: toValue,
			    from: fromValue,
			    time:timeValue,
			    date: dateValue,
			    passengers: passengersValue,
			    price: priceValue,
			    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
			    userId: userIdValue
			 })
			  .then(function (response) {
			  	console.log('hola')
			  	getTrips();
			  	divLlevar.style.display = 'none'	
				divLlevame.style.display = 'inline-block';
			 })
			  .catch(function (error) {
			    console.log(error);
			  });
		})

	
		divLlevar.style.display = 'none';
		llevarButton.addEventListener('click',function() {
			divLlevame.style.display = 'none';
			buscador.style.display = 'none';
			divLlevar.style.display = 'inline-block';
		});
	
		llevameButton.addEventListener('click',function () {

			divLlevame.style.display = 'inline-block'	
			divLlevar.style.display = 'none';
			if (window.innerWidth >= 960){
				if (buscador.style.display == 'none'){
					buscador.style.display = 'inline-block';
				};	
			}
		});	

	}

	var botonIngresar = document.getElementById('botonIngresar');
	var botonIngresarMobile = document.getElementById('botonIngresarMobile');
	var divLogin = document.querySelector('.form-login');
	var divRegistrarse = document.querySelector('div.form-registrarse');
	var botonCrearCuenta = document.querySelector('#crear_cuenta')
	var botonCruz = document.querySelectorAll('.fa.fa-times');

	if(divLogin){

		if(document.querySelector('.form-login div.form-group.has-error') == null){
			console.log(botonIngresar);
			divLogin.style.display = 'none';
		}
		if(document.querySelector('.form-registrarse div.form-group.has-error') == null){
			divRegistrarse.style.display = 'none';
		}
		botonCruz.forEach(function (elem) {
			elem.addEventListener('click',function () {
				divLogin.style.display = 'none';
				divRegistrarse.style.display = 'none';
			})
		})

		botonIngresar.addEventListener('click',function (event) {
			console.log(botonIngresar);
			event.preventDefault();
			divLogin.style.display = 'inline';
			botonCrearCuenta.addEventListener('click', function () {
				divLogin.style.display = 'none';
				divRegistrarse.style.display = 'inline-block';
			})
		});


		botonIngresarMobile.addEventListener('click',function (event) {
			event.preventDefault();
			divLogin.style.display = 'inline';
			botonCrearCuenta.addEventListener('click', function () {
				divLogin.style.display = 'none';
				divRegistrarse.style.display = 'inline-block';
			})
		});


	}



	function getTrips() {
			axios.get('/api/showTrips')
			  .then(function (response) {
			    var results = response.data;
			    var post = document.querySelector('article.posteo.llevame-section');
			    var postList = document.querySelector('div.llevame-blanco');

			    var oldPosts = document.querySelectorAll('div.llevame-blanco article');

			    oldPosts.forEach(function (elem) {
			    	elem.remove();
			    });


			   	results.forEach(function (elem) {
			   		var newPost = post.cloneNode(true);
			   		newPost.childNodes[3].childNodes[1].childNodes[1].innerText = elem.user.name
			   		newPost.childNodes[3].childNodes[3].childNodes[1].innerText = elem.date+"//"+elem.time
			   		newPost.childNodes[3].childNodes[3].childNodes[3].childNodes[3].innerText = elem.from
			   		newPost.childNodes[3].childNodes[3].childNodes[5].childNodes[3].innerText = elem.to
			   		newPost.childNodes[3].childNodes[5].childNodes[3].innerText = (elem.passengers-elem.usersConfirmed.length)+" lugares disponibles";
			   		newPost.childNodes[3].childNodes[5].childNodes[5].innerText = elem.price+"$ Por pasajero";
			   		newPost.childNodes[5].childNodes[1].setAttribute('id',elem.id);

			   		postList.appendChild(newPost);
			   	})


			   	var confrimarViajeButtons = document.querySelectorAll('img.img1.confirmarViaje');

		    	confrimarViajeButtons.forEach(function (confirmarViajeButton) {
		    	confirmarViajeButton.addEventListener('click', function () {
			    	var tripIdValue = confirmarViajeButton.getAttribute('id');
					var userIdValue = document.querySelector('#user-id').value;
					axios.post('/api/confirmTrip', {
					    tripId: tripIdValue,
					    userId:userIdValue,
					    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
					})
					  .then(function (response) {
					  	console.log(response.data)
					  	getMyTrips();
					})
					  .catch(function (error) {
					    console.log(error);
					});
				})
		    })	
			  })
			  .catch(function (error) {
			    console.log(error);
			});
		
	}



	function getMyTrips() {
		var userIdValue = document.querySelector('#user-id').value;
		axios.post('/api/showUserTrips',{
			userId:userIdValue,
			'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
		})
		  .then(function (response) {

		  	console.log(response)
		    var results = response.data;
		    var post = document.querySelector('article.posteo-misViajes');
		    var postList = document.querySelector('div.form-misViajes');

		    var oldPosts = document.querySelectorAll('div.form-misViajes article');

		    oldPosts.forEach(function (elem) {
		    	elem.remove();
		    });


		   	results.forEach(function (elem) {
		   		var newPost = post.cloneNode(true);
		   		newPost.childNodes[3].childNodes[1].childNodes[1].innerText = elem.user.name +" cel:"+elem.user.phone
		   		newPost.childNodes[3].childNodes[3].childNodes[1].innerText = elem.date+"//"+elem.time
		   		newPost.childNodes[3].childNodes[3].childNodes[3].childNodes[3].innerText = elem.from
		   		newPost.childNodes[3].childNodes[3].childNodes[5].childNodes[3].innerText = elem.to
		   		newPost.childNodes[3].childNodes[5].childNodes[3].innerText = (elem.passengers-elem.usersConfirmed.length)+" lugares disponibles";
		   		newPost.childNodes[3].childNodes[5].childNodes[5].innerText = elem.price+"$ Por pasajero";
		   		newPost.childNodes[5].childNodes[1].setAttribute('id',elem.id);

		   		postList.appendChild(newPost);
		   	})	    		
		  })
		  .catch(function (error) {
		    console.log(error);
		});
	}


	function prepareQuery() {
		var form = document.querySelector('form.buscar-web');
		form.addEventListener('submit', function (event) {
			event.preventDefault();
			var toValue = form[0].value;
			var fromValue = form[1].value;
			var timeValue = form[2].value;
			var dateValue = form[3].value;
			if(toValue!=''&&fromValue!=''&&timeValue!=''&&dateValue!=''){
				axios.post('/api/showSortTrips', {
					to: toValue,
					from: fromValue,
					time: timeValue,
					date: dateValue,
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				})
				  .then(function (response) {
				    var results = response.data;
				    var post = document.querySelector('article.posteo.llevame-section');
				    var postList = document.querySelector('div.llevame-blanco');

				    var oldPosts = document.querySelectorAll('div.llevame-blanco article');

				    oldPosts.forEach(function (elem) {
				    	elem.remove();
				    });


				   	results.forEach(function (elem) {
				   		var newPost = post.cloneNode(true);
				   		newPost.childNodes[3].childNodes[1].childNodes[1].innerText = elem.user.name+" cel:"+elem.user.phone
				   		newPost.childNodes[3].childNodes[3].childNodes[1].innerText = elem.date+"//"+elem.time
				   		newPost.childNodes[3].childNodes[3].childNodes[3].childNodes[3].innerText = elem.from
				   		newPost.childNodes[3].childNodes[3].childNodes[5].childNodes[3].innerText = elem.to
				   		newPost.childNodes[3].childNodes[5].childNodes[3].innerText = (elem.passengers-elem.usersConfirmed.length)+" lugares disponibles";
				   		newPost.childNodes[3].childNodes[5].childNodes[5].innerText = elem.price+"$ Por pasajero";
				   		newPost.childNodes[5].childNodes[1].setAttribute('id',elem.id);

				   		postList.appendChild(newPost);
				   	})


				   	var confrimarViajeButtons = document.querySelectorAll('img.img1.confirmarViaje');

			    	confrimarViajeButtons.forEach(function (confirmarViajeButton) {
			    	confirmarViajeButton.addEventListener('click', function () {
				    	var tripIdValue = confirmarViajeButton.getAttribute('id');
						var userIdValue = document.querySelector('#user-id').value;
						axios.post('/api/confirmTrip', {
						    tripId: tripIdValue,
						    userId:userIdValue,
						    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
						})
						  .then(function (response) {
						  	console.log(response.data)
						  	getMyTrips();
						})
						  .catch(function (error) {
						    console.log(error);
						});
					})
			    })	
				  })
				  .catch(function (error) {
				    console.log(error);
				});	
			}else{
				getTrips();
			}		
		})
	}




	if(document.querySelector('form.buscar-mobile')){
		var form = document.querySelector('form.buscar-mobile');
		form.addEventListener('submit', function (event) {
			event.preventDefault();
			var toValue = form[0].value;
			var fromValue = form[1].value;
			var timeValue = form[2].value;
			var dateValue = form[3].value;
			if(toValue!=''&&fromValue!=''&&timeValue!=''&&dateValue!=''){
				axios.post('/api/showSortTrips', {
					to: toValue,
					from: fromValue,
					time: timeValue,
					date: dateValue,
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				})
				  .then(function (response) {
				    var results = response.data;
				    var post = document.querySelector('article.posteo.llevame-section');
				    var postList = document.querySelector('#llevame');

				    // var oldPosts = document.querySelectorAll('div.llevame-blanco article');

				    // oldPosts.forEach(function (elem) {
				    // 	elem.remove();
				    // });


				   	results.forEach(function (elem) {
				   		var newPost = post.cloneNode(true);
				   		newPost.childNodes[3].childNodes[1].childNodes[1].innerText = elem.user.name+" cel:"+elem.user.phone
				   		newPost.childNodes[3].childNodes[3].childNodes[1].innerText = elem.date+"//"+elem.time
				   		newPost.childNodes[3].childNodes[3].childNodes[3].childNodes[3].innerText = elem.from
				   		newPost.childNodes[3].childNodes[3].childNodes[5].childNodes[3].innerText = elem.to
				   		newPost.childNodes[3].childNodes[5].childNodes[3].innerText = (elem.passengers-elem.usersConfirmed.length)+" lugares disponibles";
				   		newPost.childNodes[3].childNodes[5].childNodes[5].innerText = elem.price+"$ Por pasajero";
				   		newPost.childNodes[5].childNodes[1].setAttribute('id',elem.id);
				   		newPost.style.display = 'inline-block';
x
				   		postList.appendChild(newPost);
				   	})


				   	var confrimarViajeButtons = document.querySelectorAll('img.img1.confirmarViaje');

			    	confrimarViajeButtons.forEach(function (confirmarViajeButton) {
			    	confirmarViajeButton.addEventListener('click', function () {
				    	var tripIdValue = confirmarViajeButton.getAttribute('id');
						var userIdValue = document.querySelector('#user-id').value;
						axios.post('/api/confirmTrip', {
						    tripId: tripIdValue,
						    userId:userIdValue,
						    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
						})
						  .then(function (response) {
						  	console.log(response.data)
						  	getMyTrips();
						})
						  .catch(function (error) {
						    console.log(error);
						});
					})
			    })	
				  })
				  .catch(function (error) {
				    console.log(error);
				});	
			}else{
				getTrips();
			}		
		})
	}
});