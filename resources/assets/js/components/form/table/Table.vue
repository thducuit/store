<template>
	<table class="table table-bordered">
    	<thead>
    		<tr>
                <th v-for="heading in headings">
                    <p>{{ heading.label }}</p>
                </th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr v-for="item in list">
                <td v-for="$index in keys">
                    <p>{{ item[$index] }}</p>
                </td>
    		</tr>
    	</tbody>
    </table>
</template>

<script type="text/javascript">
	export default {
        props: ['keys', 'list', 'headings'],
		mounted() {
			console.log('table mounted');
		}
	}
</script>