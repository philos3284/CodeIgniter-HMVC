# CodeIgniter-HMVC
A boilerplate for creating CodeIgniter HMVC projects quickly. This project is somewhat maintained by me but if you have any problems, please refer to this link: https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/ Currently running on version 3.1.3.

# FAQ's

<h2>Form Validation</h2>
If you have trouble running form validation, add '$this' to your code, for example:
<br>
Change this:

<pre><code>
&lt;?php
if ($this->form_validation->run() == FALSE)
{
  $this->load->view('myform');
}
else
{
  $this->load->view('formsuccess');
}
</code></pre>

To this:
<pre><code>
&lt;?php
if ($this->form_validation->run($this) == FALSE)
{
  $this->load->view('myform');
}
else
{
  $this->load->view('formsuccess');
}
</code></pre>
