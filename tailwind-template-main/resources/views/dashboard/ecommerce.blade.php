<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.front.styles')

        <title>Trezo - Tailwind CSS Admin Dashboard Template</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        @include('partials.dashboard.sidebar')
        @include('partials.dashboard.header')

        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
				<div class="lg:col-span-2">
					<!-- Welcome -->
					<div
						class="trezo-card bg-primary-500 mb-[25px] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-content relative ltr:md:pr-[230px] rtl:md:pl-[230px]"
						>
							<div class="md:pt-[5px] md:pb-[5px]">
								<h5
									class="!mb-[5px] md:!mb-[2px] !font-semibold !text-white"
								>
									Good Morning,
									<span class="text-[#ffcea9]">Olivia!</span>
								</h5>
								<p class="text-[#d5d9e2]">
									Here's what's happening with your store
									today.
								</p>
								<div
									class="border-t border-primary-400 mt-[15px] mb-[15px] md:mt-[30px] md:mb-[33px]"
								></div>
								<div class="sm:flex items-center">
									<div
										class="flex items-center ltr:sm:mr-[20px] ltr:2xl:mr-[40px] rtl:sm:ml-[20px] rtl:2xl:ml-[40px]"
									>
										<div
											class="w-[42px] h-[42px] rtl:ml-[12px] ltr:mr-[12px] bg-primary-50 text-primary-500 rounded-md flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												shopping_bag
											</i>
										</div>
										<div>
											<span
												class="text-[15px] md:text-md text-white block font-semibold mb-px md:mb-0"
											>
												86 New Orders
											</span>
											<span class="block text-gray-200">
												Awaiting processing
											</span>
										</div>
									</div>
									<div
										class="flex items-center mt-[15px] sm:mt-0"
									>
										<div
											class="w-[42px] h-[42px] rtl:ml-[12px] ltr:mr-[12px] bg-danger-50 text-danger-500 rounded-md flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												chat_error
											</i>
										</div>
										<div>
											<span
												class="text-[15px] md:text-md text-white block font-semibold mb-px md:mb-0"
											>
												35 Products
											</span>
											<span class="block text-gray-200">
												Out of stock
											</span>
										</div>
									</div>
								</div>
							</div>
							<div
								class="text-center md:absolute ltr:right-0 rtl:left-0 md:max-w-[208.04px] md:top-1/2 md:-translate-y-1/2 mt-[20px] md:mt-0"
							>
								<img
									src="/assets/images/welcome.png"
									class="inline-block"
									alt="welcome-image"
								/>
							</div>
						</div>
					</div>

					<!-- Total Sales -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Total Sales</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]"
										id="dropdownToggleBtn"
									>
										<span
											class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]"
										>
											Monthly
											<i
												class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"
											></i>
										</span>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												Weekly
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												Monthly
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												Yearly
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div
								class="-mb-[15px] ltr:-ml-[10px] rtl:-mr-[10px] -mt-[5px]"
							>
								<div id="ecommerceTotalSalesChart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="lg:col-span-1">
					<!-- Total Orders -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[25px] rounded-md"
					>
						<div class="trezo-card-content">
							<div class="flex items-center justify-between">
								<div class="flex items-center">
									<span class="block"> Total Orders </span>
									<span
										class="inline-block px-[8.3px] py-[1px] text-orange-700 border border-orange-200 bg-danger-100 dark:bg-[#15203c] dark:border-[#172036] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]"
									>
										-7.6%
									</span>
								</div>
								<span class="block text-sm"> Last 7 days </span>
							</div>
							<h5
								class="!text-lg md:!text-[20px] !mb-0 !mt-[5px]"
							>
								$72,458
							</h5>
							<div
								class="mx-auto max-w-[150px] -mt-[10px] -mb-[10px] md:-mt-[25px] md:-mb-[16px]"
							>
								<div id="ecommerceTotalOrdersChart"></div>
							</div>
							<ul>
								<li
									class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[6px] last:mb-0"
								>
									<span
										class="inline-block bg-primary-500 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"
									></span>
									<span class="block"> Completed </span>
									<span class="block"> 62% </span>
								</li>
								<li
									class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[6px] last:mb-0"
								>
									<span
										class="inline-block bg-primary-200 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"
									></span>
									<span class="block"> Pending </span>
									<span class="block"> 38% </span>
								</li>
							</ul>
						</div>
					</div>

					<!-- Total Customers -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[25px] rounded-md"
					>
						<div class="trezo-card-content">
							<div class="flex items-center justify-between">
								<div class="flex items-center">
									<span class="block"> Total Customers </span>
									<span
										class="inline-block px-[8.3px] py-[1px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]"
									>
										+5.4
									</span>
								</div>
								<span class="block text-sm"> Last 7 days </span>
							</div>
							<h5
								class="!text-lg md:!text-[20px] !mb-0 !mt-[4px]"
							>
								1,528
							</h5>
							<div
								class="mx-auto max-w-[300px] -mt-[33px] -mb-[20px]"
							>
								<div id="ecommerceTotalCustomersChart"></div>
							</div>
							<div
								class="flex items-center justify-between text-sm"
							>
								<span class="block"> 1 June </span>
								<span class="block"> 7 June </span>
							</div>
						</div>
					</div>

					<!-- Total Revenue -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md"
					>
						<div class="trezo-card-content">
							<div class="flex items-center justify-between">
								<div class="flex items-center">
									<span class="block"> Total Revenue </span>
									<span
										class="inline-block px-[8.3px] py-[1px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]"
									>
										+10%
									</span>
								</div>
								<span class="block text-sm">
									Last 30 days
								</span>
							</div>
							<h5
								class="!text-lg md:!text-[20px] !mb-0 !mt-[4px]"
							>
								$165,458
							</h5>
							<div
								class="mx-auto max-w-[200px] -mt-[20px] -mb-[10px] md:-mt-[23px] md:-mb-[16px]"
							>
								<div id="ecommerceTotalRevenueChart"></div>
							</div>
							<ul>
								<li
									class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[5px] last:mb-0"
								>
									<span
										class="inline-block bg-primary-500 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"
									></span>
									<span class="block"> Fashion </span>
									<span class="block"> 75% </span>
								</li>
								<li
									class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[5px] last:mb-0"
								>
									<span
										class="inline-block bg-primary-200 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"
									></span>
									<span class="block"> Others </span>
									<span class="block"> 25% </span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
				<div class="lg:col-span-2">
					<!-- Sales by Locations -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Sales by Locations</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500"
										id="dropdownToggleBtn"
									>
										<i class="ri-more-fill"></i>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div
								class="flex items-center justify-center min-h-[160px]"
							>
								<div id="salesByLocationsJsVectorMap"></div>
							</div>
							<ul class="mt-[20px]">
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/usa.svg"
											class="inline-block"
											alt="usa"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											United States
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 85%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												85%
											</span>
										</div>
									</div>
								</li>
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/germany.svg"
											class="inline-block"
											alt="germany"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											Germany
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 75%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												75%
											</span>
										</div>
									</div>
								</li>
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/uk.svg"
											class="inline-block"
											alt="uk"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											United Kingdom
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 40%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												40%
											</span>
										</div>
									</div>
								</li>
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/canada.svg"
											class="inline-block"
											alt="canada"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											Canada
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 10%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												10%
											</span>
										</div>
									</div>
								</li>
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/portugal.svg"
											class="inline-block"
											alt="portugal"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											Portugal
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 5%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												05%
											</span>
										</div>
									</div>
								</li>
								<li
									class="flex items-center mb-[14.4px] last:mb-0"
								>
									<div
										class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]"
									>
										<img
											src="/assets/images/flags/spain.svg"
											class="inline-block"
											alt="spain"
										/>
									</div>
									<div class="grow">
										<span
											class="block font-medium mb-[2px]"
										>
											Spain
										</span>
										<div
											class="leading-none flex items-center"
										>
											<div
												class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
											>
												<div
													class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
													style="width: 15%"
												></div>
											</div>
											<span
												class="block ltr:ml-[15px] rtl:mr-[15px]"
											>
												15%
											</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lg:col-span-3">
					<!-- Top Selling Products -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Top Selling Products</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]"
										id="dropdownToggleBtn"
									>
										<span
											class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]"
										>
											Today
											<i
												class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"
											></i>
										</span>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div class="table-responsive overflow-x-auto">
								<table class="w-full">
									<thead class="text-black dark:text-white">
										<tr>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"
											>
												Product
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"
											>
												Price
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"
											>
												Order
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"
											>
												Stock
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tr-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"
											>
												Amount
											</th>
										</tr>
									</thead>
									<tbody class="text-black dark:text-white">
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/products/product1.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<a
															href="/dashboard/product-details"
															class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500"
														>
															Smart Band
														</a>
														<span
															class="block text-sm text-gray-500 dark:text-gray-400"
														>
															08 Jun 2025
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$35.00
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												75
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												750
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$2,625
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/products/product2.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<a
															href="/dashboard/product-details"
															class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500"
														>
															Headphone
														</a>
														<span
															class="block text-sm text-gray-500 dark:text-gray-400"
														>
															07 Jun 2025
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$49.00
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												25
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												825
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$1,225
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/products/product3.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<a
															href="/dashboard/product-details"
															class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500"
														>
															iPhone 15 Plus
														</a>
														<span
															class="block text-sm text-gray-500 dark:text-gray-400"
														>
															06 Jun 2025
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$99.00
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												55
											</td>
											<td
												class="text-danger-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												Stock Out
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$5,445
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/products/product4.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<a
															href="/dashboard/product-details"
															class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500"
														>
															Bluetooth Speaker
														</a>
														<span
															class="block text-sm text-gray-500 dark:text-gray-400"
														>
															05 Jun 2025
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$59.00
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												40
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												535
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$2,360
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/products/product5.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<a
															href="/dashboard/product-details"
															class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500"
														>
															Airbuds 2nd Gen
														</a>
														<span
															class="block text-sm text-gray-500 dark:text-gray-400"
														>
															04 Jun 2025
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$79.00
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												56
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												460
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$4,424
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div
								class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between"
							>
								<p class="!mb-0 text-sm">
									Showing 5 of 36 results
								</p>
								<ol class="mt-[10px] sm:mt-0">
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											<span class="opacity-0"> 0 </span>
											<i
												class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2"
											>
												chevron_left
											</i>
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white"
										>
											1
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											2
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											3
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											4
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											<span class="opacity-0"> 0 </span>
											<i
												class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2"
											>
												chevron_right
											</i>
										</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
				<div class="lg:col-span-2">
					<!-- Recent Orders -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Recent Orders</h5>
							</div>
							<div
								class="trezo-card-subtitle sm:flex sm:items-center"
							>
								<form
									class="relative sm:w-[240px] ltr:sm:mr-[20px] rtl:sm:ml-[20px] my-[13px] sm:my-0"
								>
									<label
										class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2"
									>
										<i
											class="material-symbols-outlined !text-[20px]"
										>
											search
										</i>
									</label>
									<input
										type="text"
										placeholder="Search here....."
										class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400"
									/>
								</form>
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]"
										id="dropdownToggleBtn"
									>
										<span
											class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]"
										>
											Show All
											<i
												class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"
											></i>
										</span>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:left-0 sm:ltr:right-0 rtl:right-0 sm:rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div class="table-responsive overflow-x-auto">
								<table class="w-full">
									<thead class="text-black dark:text-white">
										<tr>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
											>
												Order ID
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
											>
												Customer
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
											>
												Created
											</th>
											<th
												class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
											>
												Total
											</th>
											<th
												class="font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md"
											>
												Status
											</th>
										</tr>
									</thead>
									<tbody class="text-black dark:text-white">
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												#JAN-2345
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/users/user1.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<span
															class="block font-medium"
														>
															Sarah Johnson
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												12 Jun 2025
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$10,490
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<span
													class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs"
												>
													Shipped
												</span>
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												#JAN-1323
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/users/user2.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<span
															class="block font-medium"
														>
															Michael Smith
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												11 Jun 2025
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$6,575
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<span
													class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs"
												>
													Confirmed
												</span>
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												#DEC-1234
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/users/user3.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<span
															class="block font-medium"
														>
															Emily Brown
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												10 Jun 2025
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$12,870
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<span
													class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs"
												>
													Pending
												</span>
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												#DEC-3567
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/users/user4.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<span
															class="block font-medium"
														>
															Jason Lee
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												09 Jun 2025
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$7,895
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<span
													class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs"
												>
													Shipped
												</span>
											</td>
										</tr>
										<tr>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												#DEC-1098
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<div class="flex items-center">
													<div
														class="rounded-md w-[40px]"
													>
														<img
															src="/assets/images/users/user5.jpg"
															class="inline-block rounded-md"
															alt="product-image"
														/>
													</div>
													<div
														class="ltr:ml-[12px] rtl:mr-[12px]"
													>
														<span
															class="block font-medium"
														>
															Ashley Davis
														</span>
													</div>
												</div>
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												08 Jun 2025
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												$4,680
											</td>
											<td
												class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
											>
												<span
													class="px-[8px] py-[3px] inline-block bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs"
												>
													Rejected
												</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div
								class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between"
							>
								<p class="!mb-0 text-sm">
									Showing 5 of 36 results
								</p>
								<ol class="mt-[10px] sm:mt-0">
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											<span class="opacity-0"> 0 </span>
											<i
												class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2"
											>
												chevron_left
											</i>
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white"
										>
											1
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											2
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											3
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											4
										</a>
									</li>
									<li
										class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
									>
										<a
											href="javascript:void(0);"
											class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
										>
											<span class="opacity-0"> 0 </span>
											<i
												class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2"
											>
												chevron_right
											</i>
										</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<div class="lg:col-span-1">
					<!-- Order Summary -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Order Summary</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]"
										id="dropdownToggleBtn"
									>
										<span
											class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]"
										>
											Today
											<i
												class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"
											></i>
										</span>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div id="ecommerceOrderSummaryChart"></div>
							<ul class="-mt-[4px]">
								<li class="mb-[10px] md:mb-[12px] last:mb-0">
									<span
										class="block font-medium mb-[2px] md:mb-[4px]"
									>
										Completed Order
									</span>
									<div class="leading-none flex items-center">
										<div
											class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
										>
											<div
												class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md"
												style="width: 60%"
											></div>
										</div>
										<span class="block ml-[15px]">
											60%
										</span>
									</div>
								</li>
								<li class="mb-[10px] md:mb-[12px] last:mb-0">
									<span
										class="block font-medium mb-[2px] md:mb-[4px]"
									>
										New Order
									</span>
									<div class="leading-none flex items-center">
										<div
											class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
										>
											<div
												class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
												style="width: 30%"
											></div>
										</div>
										<span class="block ml-[15px]">
											30%
										</span>
									</div>
								</li>
								<li class="mb-[10px] md:mb-[12px] last:mb-0">
									<span
										class="block font-medium mb-[2px] md:mb-[4px]"
									>
										Pending Order
									</span>
									<div class="leading-none flex items-center">
										<div
											class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]"
										>
											<div
												class="flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md"
												style="width: 10%"
											></div>
										</div>
										<span class="block ml-[15px]">
											10%
										</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
				<div class="lg:col-span-1">
					<!-- Recent Transactions -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Recent Transactions</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500"
										id="dropdownToggleBtn"
									>
										<i class="ri-more-fill"></i>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<ul>
								<li
									class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[22px] last:mb-0"
								>
									<div class="flex items-center">
										<div
											class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-primary-100 dark:bg-[#15203c] text-primary-500 rounded-full flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												credit_card
											</i>
										</div>
										<div>
											<span
												class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium"
											>
												Master Card
											</span>
											<span class="block text-sm">
												16 Jun 2025 - 7:12 pm
											</span>
										</div>
									</div>
									<span class="block text-success-600">
										+1,520
									</span>
								</li>
								<li
									class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[22px] last:mb-0"
								>
									<div class="flex items-center">
										<div
											class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-full flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												redeem
											</i>
										</div>
										<div>
											<span
												class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium"
											>
												Paypal
											</span>
											<span class="block text-sm">
												15 Jun 2025 - 1:42 am
											</span>
										</div>
									</div>
									<span class="block text-danger-500">
										-2,250
									</span>
								</li>
								<li
									class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[22px] last:mb-0"
								>
									<div class="flex items-center">
										<div
											class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-purple-100 dark:bg-[#15203c] text-purple-500 rounded-full flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												account_balance
											</i>
										</div>
										<div>
											<span
												class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium"
											>
												Wise
											</span>
											<span class="block text-sm">
												14 Jun 2025 - 4:21 pm
											</span>
										</div>
									</div>
									<span class="block text-success-600">
										+3,560
									</span>
								</li>
								<li
									class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[22px] last:mb-0"
								>
									<div class="flex items-center">
										<div
											class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-secondary-100 dark:bg-[#15203c] text-secondary-500 rounded-full flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												currency_ruble
											</i>
										</div>
										<div>
											<span
												class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium"
											>
												Payoneer
											</span>
											<span class="block text-sm">
												13 Jun 2025 - 2:42 am
											</span>
										</div>
									</div>
									<span class="block text-success-600">
										+6,500
									</span>
								</li>
								<li
									class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[22px] last:mb-0"
								>
									<div class="flex items-center">
										<div
											class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-success-100 dark:bg-[#15203c] text-success-600 rounded-full flex items-center justify-center"
										>
											<i
												class="material-symbols-outlined"
											>
												credit_score
											</i>
										</div>
										<div>
											<span
												class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium"
											>
												Credit Card
											</span>
											<span class="block text-sm">
												12 Jun 2025 - 3:20 pm
											</span>
										</div>
									</div>
									<span class="block text-danger-500">
										-4,320
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lg:col-span-2">
					<!-- Returning Customer Rate -->
					<div
						class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md"
					>
						<div
							class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between"
						>
							<div class="trezo-card-title">
								<h5 class="!mb-0">Returning Customer Rate</h5>
							</div>
							<div class="trezo-card-subtitle">
								<div class="trezo-card-dropdown relative">
									<button
										type="button"
										class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]"
										id="dropdownToggleBtn"
									>
										<span
											class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]"
										>
											This Month
											<i
												class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"
											></i>
										</span>
									</button>
									<ul
										class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none"
									>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Day
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Week
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Month
											</button>
										</li>
										<li>
											<button
												type="button"
												class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black"
											>
												This Year
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="trezo-card-content">
							<div
								class="-mb-[15px] -mt-[5px] md:-mt-[22px] ltr:-ml-[10px] rtl:-mr-[10px]"
							>
								<div
									id="ecommerceReturningCustomerRateChart"
								></div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
