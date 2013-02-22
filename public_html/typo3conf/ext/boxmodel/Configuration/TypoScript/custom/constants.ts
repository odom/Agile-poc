## Overriding of Project information
const.project.partial.name = slimboxmodel
## Including of plugins
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:tq_seo/static/default/constants.txt">
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:tq_seo/static/default/constants.txt">

## Form hanlder (Contact form)
formhandlerExamples.basic.contact-form {

	# cat=Formhandler Examples - Basic - Contact Form/basic/10; type=string; label=Root path: Path where the example was saved to.
	rootPath = typo3conf/ext/boxmodel/Resources/Private/Templates/BoxModel/plugin/Formhandler
	email {

		user {

			# cat=Formhandler Examples - Basic - Contact Form/basic/20; type=string; label=User email sender: Email address to use as sender address for the user email.
			sender_email = 

		}

		admin {

			# cat=Formhandler Examples - Basic - Contact Form/basic/20; type=string; label=Admin email sender: Email address to use as sender address for the admin email.
			sender_email = 

			# cat=Formhandler Examples - Basic - Contact Form/basic/20; type=string; label=Admin email recipient: Email address of an admin to receive the contact request.
			to_email = 
		}
	}

	# cat=Formhandler Examples - Basic - Contact Form/basic/40; type=string; label=Redirect Page: Page ID to redirect after successful form submission.
	redirectPage = 
}
