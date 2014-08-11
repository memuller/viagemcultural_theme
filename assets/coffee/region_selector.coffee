(($) ->
	if $('body').hasClass('archive') and $('body').hasClass('tax-region')

		# changing the parent region select triggers an AJAX request that updates
		# the child region select w/ the one from the appropriate region.
		$('#search').on 'change', 'select.parent', (event)->
			$this = $(this)
			type = $('#search').attr('class')
			region_url = [Wordpress.home_url, 'regiao', type, $this.val()].join('/')
			$('select.children').css('display', 'none')
			$.ajax region_url,
				complete: (response, status) ->
					return if status is 'error'
					$response = $(response.responseText)
					$('select.children').replaceWith $response.find('select.children')

		# changing the child region select triggers a redirect to the full child region archive page.
		$('#search').on 'change', 'select.children', (event)->
			$this = $(this)
			type = $('#search').attr('class')
			parent = $('select.parent').val()
			region_url = [Wordpress.home_url, 'regiao', type, parent, $this.val()].join('/')
			window.location.href = region_url

		# clicking the button triggers the change event of the child region select.
		$('#search').on 'click', 'input', (event)->
			$('#search select.children').change()
) jQuery