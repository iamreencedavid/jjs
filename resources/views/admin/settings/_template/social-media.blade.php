<form class="form_settings">
	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Facebook</label>
				<p class="control">
					<input name="facebook" class="input" id="facebook" type="text" value="{{ (count($settings) > 0) ? $settings->facebook : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Twitter</label>
				<p class="control">
					<input name="twitter" class="input" id="twitter" type="text" value="{{ (count($settings) > 0) ? $settings->twitter : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Linked In</label>
				<p class="control">
					<input name="linkedin" class="input" id="linkedin" type="text" value="{{ (count($settings) > 0) ? $settings->linkedin : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="columns">
		<div class="column">
			<div class="field">
				<label class="label">Google</label>
				<p class="control">
					<input name="google" class="input" id="google" type="text" value="{{ (count($settings) > 0) ? $settings->google : '' }}">
				</p>
			</div>
		</div>
	</div>

	<div class="field is-grouped">
		<p class="control">
			<input type="hidden" name="type" value="social-media">
			<button type="submit" class="button is-primary">Save</button>
		</p>
	</div>
</form>