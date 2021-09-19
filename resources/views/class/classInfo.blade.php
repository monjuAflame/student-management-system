<style type="text/css">
	.academic-details{
		width: 440px;
	}
	#table-class-info{
		width: 100%;
	}
	table  tbody > tr > td {
		vertical-align: middle;
		text-align: center;
	}
	table thead tr > th {
		text-align: center;
	}
</style>
<table class="table-hover table-striped table-bordered" id="table-class-info">
	<thead>
		<tr class="text-align">
			<th>Program</th>
			<th>Level</th>
			<th>Shift</th>
			<th>Time</th>
			<th>Academic</th>
			<th hidden="hidden">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($classes as $class)
			<tr>
				<td>{{ $class->program}}</td>
				<td>{{ $class->level}}</td>
				<td>{{ $class->shift}}</td>
				<td>{{ $class->time}}</td>
				<td class="academic-details">
					<a href="#" data-id="{{ $class->class_id }}" id="edit-info">
						Program: {{ $class->program }} / Level: {{ $class->level }} / Shift: {{ $class->shift }} / Time: {{ $class->time }} / Batch: {{ $class->batch }} / Group: {{ $class->group }} / StartDate: {{ date('d-M-y',strtotime($class->start_time))}} / EndDate: {{ date('d-M-y',strtotime($class->end_time))}}
					</a>
				</td>
				<td>
					<button value="{{ $class->class_id }}" id="hidden" class="btn btn-danger del-class">Del</button>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<template>
    <form @submit.prevent="submit" class="vld-parent" ref="formContainer">
        <!-- your form inputs goes here-->
        <label><input type="checkbox" v-model="fullPage">Full page?</label>
        <button type="submit">Login</button>
    </form>
</template>

<script>
    import Vue from 'vue';
    // Import component
    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';
    // Init plugin
    Vue.use(Loading);

    export default {
        data() {
            return {
                fullPage: false
            }
        },
        methods: {
            submit() {
                let loader = this.$loading.show({
                  // Optional parameters
                  container: this.fullPage ? null : this.$refs.formContainer,
                  canCancel: true,
                  onCancel: this.onCancel,
                });
                // simulate AJAX
                setTimeout(() => {
                  loader.hide()
                },5000)                 
            },
            onCancel() {
              console.log('User cancelled the loader.')
            }                      
        }
    }
</script>