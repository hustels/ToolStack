		<div class="ui celled list" v-for="comment in comments | filterBy search ">
			  <div class="item">
			 <div class="right floated content">
	      				<div class="ui red button" @click="RemoveComment(comment.id)">Borrar</div>
	    			</div>
			   <!-- <img class="ui avatar image" src="#"> -->
			    <div class="content">
			      <div class="header">@{{comment.title}}</div>
			      @{{comment.description}}
			    </div>
			  </div>
			</div>
		</div>