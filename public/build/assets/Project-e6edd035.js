/* empty css              */import{o as r,f as o,b as e,t as c,F as p,x as d,a as m,w as u,d as _,u as i,j as g,c as h}from"./app-5b5608eb.js";const j={class:"container"},f=e("div",{style:{height:"160px"},class:"title left"},[e("p",null,"Project view")],-1),x={style:{"padding-left":"50px","padding-right":"0px"},class:"love-to-do"},y={class:"stickpad"},v={style:{"margin-top":"5px"}},k=["src"],I={__name:"ProjectShow",props:{project:Array,projectImages:Array},setup(t){const a={}.VITE_APP_URL;return(s,w)=>(r(),o("div",null,[e("div",null,[e("div",j,[f,e("div",x,[e("div",y,[e("h4",null,c(t.project.name),1),e("p",v,c(t.project.short_description),1),(r(!0),o(p,null,d(t.projectImages,(l,n)=>(r(),o("img",{key:n,style:{width:"100%","margin-top":"20px","border-radius":"5px"},src:i(a)+l.image,alt:"galaxtelicom.jpg"},null,8,k))),128))])])]),m(i(g),{href:s.route("home")+"#portfolio",class:"go-back"},{default:u(()=>[_(" go back")]),_:1},8,["href"])])]))}},b={__name:"Project",props:{project:Array,projectImages:Array},setup(t){return(a,s)=>(r(),h(I,{project:t.project,projectImages:t.projectImages},null,8,["project","projectImages"]))}};export{b as default};
