<div id="donate" class="span-22 prefix-1 suffix-1 last">

	<p class="intro">Your donations are used to cover the cost of providing the Kohana website and related resources. Your donations are not used for any personal gain. As part of the <?php echo HTML::anchor('http://conservancy.softwarefreedom.org/', 'Software Freedom Conservancy') ?>, your donations are fully tax-deductible to the extent permitted by law.</p>

	<div class="span-12 suffix-2">
		<h2>Make a Donation</h2>
		<p>If possible, please use Google Checkout, as there are no fees for non-profit organizations, so more of your donation will be put to use.</p>
		<div class="span-8">
			<h6 class="top">Using Google Checkout</h6>
			<script type="text/javascript">
			function validateAmount(amount){
				if(amount.value.match( /^[0-9]+(\.([0-9]+))?$/)){
					return true;
				}else{
					alert('You must enter a valid donation.');
					amount.focus();
					return false;
				}
			}
			</script>
			<form action="https://checkout.google.com/cws/v2/Donations/622836985124940/checkoutForm" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" onSubmit="return validateAmount(this.item_price_1)" target="_top">
				<input name="item_name_1" type="hidden" value="Kohana donation via Software Freedom Conservancy, Inc."/>
				<input name="item_description_1" type="hidden" value="Donation to the Kohana project via its non-profit home, Software Freedom Conservancy, Inc.  10% of the donation will go to general operations of the Conservancy; 90% will be earmarked specifically for Kohana.  This is in accordance with the wishes of the Kohana project leadership."/>
				<input name="item_quantity_1" type="hidden" value="1"/>
				<input name="item_currency_1" type="hidden" value="USD"/>
				<input name="item_is_modifiable_1" type="hidden" value="true"/>
				<input name="item_min_price_1" type="hidden" value="5.0"/>
				<input name="item_max_price_1" type="hidden" value="25000.0"/>
				<input name="_charset_" type="hidden" value="utf-8"/>

				<table cellspacing="0">
					<tr>
						<td align="right" nowrap="nowrap" width="1%">&#x24; <input id="item_price_1" name="item_price_1" onfocus="this.style.color='black'; this.value='';" size="11" style="color:grey;" type="text" value="Enter Amount"/>
						</td>
						<td align="left" width="1%">
							<input alt="Donate" src="https://checkout.google.com/buttons/donateNow.gif?merchant_id=622836985124940&amp;w=115&amp;h=50&amp;style=trans&amp;variant=text&amp;loc=en_US" type="image"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="span-4 last">
			<h6 class="top">Using PayPal</h6>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="TYCF8EKGYLL56">
			<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>

		<p class="clear"><small>Your secure donation will be made to the <abbr title="Software Freedom Conservancy">SFC</abbr>. Ten percent (10%) of your donation will given to the <abbr title="Software Freedom Conservancy">SFC</abbr> to help cover administration costs and the remaining funds will be allocated to Kohana.</small></p>
	</div>
	<div class="span-8 last">
		<h2>Account Status</h2>
		<dl class="account">
			<dt>Latest Expenses</dt>
			<dd>$9.25 on 2010-04-27 for domain names</dd>
			<dd>$27.75 on 2010-02-06 for domain names</dd>
			<dd>$22.00 on 2009-10-26 for domain names</dd>
			<dd>$490.00 on 2009-11-18 for website hosting</dd>

			<dt>Current Balance</dt>
			<dd class="good">$1,908.07</dd>
			<dd><small>Upcoming expenses will be paid in full.</small></dd>
		</dl>
	</div>

</div>