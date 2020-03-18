@extends('frontLayouts.themelayout')

    @section('title')
        FAQ | Moseva
    @endsection

    @section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">FAQ</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">FAQ</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

		<!--Faq section-->
		<section class="sptb m10">
			<div class="container">
				<div class="panel-group1" id="accordion2">
					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseone" aria-expanded="false">1. What are the Business hours?</a>
							</h4>
						</div>
						<div id="collapseone" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>Business hours are everyday 24x7</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapsetwo" aria-expanded="false">2. Payments?</a>
							</h4>
						</div>

						<div id="collapsetwo" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>Payment is due upon completion of the job.</p>
								<p>On larger projects that spans several weeks, a progress payment will be required at the end of each milestone.</p>
								<p>projects that require large purchases of materials will require a prepayment for the materials before the project starts.</p>
								<p>We accept Cash, Checks, VISA and MasterCard</p>
								<p>We also accept Online Payment Services</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapsethree" aria-expanded="false">3. Do I have to buy the materials?</a>
							</h4>
						</div>
						<div id="collapsethree" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>No need to worry. Your estimate will include labour, materials, and disposal fees in order to complete your project. We’ll be handling the entire project for you.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="false">4. How long will it take?</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>It depends, Our typical repairs take anywhere from 1-5 days depending on the complexity of the project. Our goal and mission is to get you back to your home, or business, as soon as possible.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="false">5. Who is my point of contact?</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse active" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>You will be assigned your own, personal project manager. They will be your point of contact throughout the duration of the project.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapsesix" aria-expanded="false">6. Are the repairs guaranteed?</a>
							</h4>
						</div>
						<div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>Yes, All labour and workmanship provided by best technicians on all repairs are guaranteed for six month from the date of the final invoice .We stand by the quality of our work and have a 5-star reputation to back it up.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseseven" aria-expanded="false">7. Will you really get back to me within 24-48 hours? Even on the weekends?</a>
							</h4>
						</div>
						<div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>Yes. We have created a smooth and efficient process that will allow us to give you an estimate even when we are on the road or not in the office.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseeigth" aria-expanded="false">8. Who is sent to my house to do the work??</a>
							</h4>
						</div>
						<div id="collapseeigth" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>MoSeva  technician will arrive at your home carrying his own tools . All of our techs are MoSeva employees, not subcontractors. We carefully screen each of our employees before hiring, and they are insured and all possess a high level of skill and experience. Our technicians arrive on time, ready to work.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapsenine" aria-expanded="false">9. How do I schedule a service appointment?</a>
							</h4>
						</div>
						<div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p>you can log in to our official website and book an appointment or ,To speak to your friendly customer service representative (not a machine!) who will help you schedule an appointment or you can choose to be put on a first-available list to be called if there is an opening before your scheduled appointment .</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseten" aria-expanded="false">10. How to Delete my account/cancel my Profile ?</a>
							</h4>
						</div>
						<div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p></p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse11" aria-expanded="false">11. How do I contact with MoSeva?</a>
							</h4>
						</div>
						<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p></p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse12" aria-expanded="false">12. What is the meaning of MoSeva ?</a>
							</h4>
						</div>
						<div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p></p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse13" aria-expanded="false">13. How do I get a MoSeva Membership ?</a>
							</h4>
						</div>
						<div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p></p>
							</div>
						</div>
					</div>

					<div class="panel panel-default mb-4 border p-0">
						<div class="panel-heading1">
							<h4 class="panel-title1">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse14" aria-expanded="false">14. How do delete a review on MoSeva ?</a>
							</h4>
						</div>
						<div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
							<div class="panel-body bg-white">
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Faq section-->

	@endsection