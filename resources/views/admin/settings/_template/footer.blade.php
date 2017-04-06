<form class="form_settings">
	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Address 1</label>
				<p class="control">
					<input name="footer_address_1" class="input" id="footer_address_1" type="text" value="{{ (count($settings) > 0) ? $settings->footer_address_1 : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Address 2</label>
				<p class="control">
					<input name="footer_address_2" class="input" id="footer_address_2" type="text" value="{{ (count($settings) > 0) ? $settings->footer_address_2 : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Address 3</label>
				<p class="control">
					<input name="footer_address_3" class="input" id="footer_address_3" type="text" value="{{ (count($settings) > 0) ? $settings->footer_address_3 : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="field is-grouped">
		<p class="control">
			<input type="hidden" name="type" value="footer">
			<button type="submit" class="button is-primary">Save</button>
		</p>
	</div>
</form>