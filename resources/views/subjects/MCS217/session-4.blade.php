		<div class="row  blog">
			<div class="row question">
				<h1 class="text-center">SESSION 4</h1>
				<h4 class="text-center question"> (a) Draw DFDs up to appropriate levels for the RRS</h4>
			</div>
			<div class=" row answer ">
				<hr>
				<h5 class="text-center underline">DATA FLOW DIAGRAM IF RAILWAY RESERVATION SYSTEM</h5><hr>
				<p>	A data flow diagram (DFD) is a graphical representation of the
					"flow" of data through an information system. DFDs can also be
					used for the visualization of data processing (structured
					design) . On a DFD, data items flow from an external data source
					or an internal data store to an internal data store or an
					external data sink, via an internal process. A DFD provides no
					information about the timing of processes, or about whether
					processes will operate in sequence or in parallel. It is
					therefore quite different from a flowchart, which shows the
					flow of control through an algorithm, allowing a reader to
					determine what operations will be performed, in what order,
					and under what circumstances, but not what kinds of data will
					be input to and output from the system, nor where the data
					will come from and go to, nor where the data will be stored
				(all of which are shown on a DFD) .</p>
				<p>
					It is common practice to draw a context-level data flow diagram first, which shows the interaction between the system
					and extemal agents which act as data sources and data sinks.
					On the context diagram (also known as the 'Level 0 DFD' ) thesystem's interactions with the outside world are modelled
					purely in terms of data flows across the
					system boundary . The
					context diagram shows the entire system as a single process,
				and gives no clues as to its internal organization.</p>

				<p>This context-level DFD is next "exploded", to produce a Level
					1 DFD that shows some of the detail of the system being
					modelled. The Level 1 DFD shows how the system is divided into
					sub-systems (processes) , each of which deals with one or more

					of the data flows to or from an external agent, and which
					together provide all of the functionality of the system as a
					whole. It also identifies internal data stores that must be
					present in order for the system to do its job, and shows the
					flow of data between the various parts of the system.
				</p>
				<img src="/image/mcs217/dfd-of-rrs.png" >
			</div>
			<div class="row question">
				<h4 class="text-center question">(b) Draw ERDs for the RRS. Describe the relationships between different entities</h4>
			</div>
			<div class=" row answer ">
				<hr>
				<h5 class="text-center underline">ENTITY RELATIONSHIP DIAGRAM OF RAILWAY RESERVATION SYSTEM</h5><hr>
				<img src="/image/mcs217/erd-of-rrs.png" >
			</div>
			<div class="row question">
				<h4 class="text-center question">(c) Design Data Dictionary for RRS.</h4>
			</div>
			<div class=" row answer ">
				<hr>
				<h5 class="text-center underline">DATA DICTIONARY OF RRS</h5><hr>
				<img src="/image/mcs217/ddd-of-rrs.png" >
			</div>
		</div>