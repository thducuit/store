<template>
	<div class="checkbox">
		<input type="checkbox" name="" id="test1">
		<label for="test1"></label>
	</div>
</template>

<style type="text/css">
	/* Base for label styling */
	.checkbox [type="checkbox"]:not(:checked),
	.checkbox [type="checkbox"]:checked {
	  position: absolute;
	  left: -9999px;
	}
	.checkbox [type="checkbox"]:not(:checked) + label,
	.checkbox [type="checkbox"]:checked + label {
	  position: relative;
	  padding-left: 1.95em;
	  cursor: pointer;
	}

	/* checkbox aspect */
	.checkbox [type="checkbox"]:not(:checked) + label:before,
	.checkbox [type="checkbox"]:checked + label:before {
	  content: '';
	  position: absolute;
	  left: 0; top: 0;
	  width: 1.25em; height: 1.25em;
	  border: 2px solid #ccc;
	  background: #fff;
	  border-radius: 4px;
	  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
	}
	/* checked mark aspect */
	.checkbox [type="checkbox"]:not(:checked) + label:after,
	.checkbox [type="checkbox"]:checked + label:after {
	  content: '✔';
	  position: absolute;
	  top: .1em; left: .1em;
	  font-size: 1.4em;
	  line-height: 0.8;
	  color: #09ad7e;
	  transition: all .2s;
	  font-family: Helvetica, Arial, sans-serif;
	}
	/* checked mark aspect changes */
	.checkbox [type="checkbox"]:not(:checked) + label:after {
	  opacity: 0;
	  transform: scale(0);
	}
	.checkbox [type="checkbox"]:checked + label:after {
	  opacity: 1;
	  transform: scale(1);
	}
	/* disabled checkbox */
	.checkbox [type="checkbox"]:disabled:not(:checked) + label:before,
	.checkbox [type="checkbox"]:disabled:checked + label:before {
	  box-shadow: none;
	  border-color: #bbb;
	  background-color: #ddd;
	}
	.checkbox [type="checkbox"]:disabled:checked + label:after {
	  color: #999;
	}
	.checkbox [type="checkbox"]:disabled + label {
	  color: #aaa;
	}
	/* accessibility */
	.checkbox [type="checkbox"]:checked:focus + label:before,
	.checkbox [type="checkbox"]:not(:checked):focus + label:before {
	  border: 2px solid blue;
	}

	/* hover style just for information */
	.checkbox label:hover:before {
	  border: 2px solid #4778d9!important;
	}

</style>